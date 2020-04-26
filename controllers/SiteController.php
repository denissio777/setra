<?php
namespace app\controllers;
use app\models\Tasks;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $query = Tasks::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 5, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $tasks = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

            return $this->render('index', [
                'tasks' => $tasks,
                'pages' => $pages,
            ]);
    }

    public function actionOpen()
    {
        $query = Tasks::find()->where(['status' => 'Open']);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 5, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $tasks = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'tasks' => $tasks,
            'pages' => $pages,
        ]);
    }

    public function actionCompleted()
    {
        $query = Tasks::find()->where(['status' => 'Closed']);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 5, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $tasks = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'tasks' => $tasks,
            'pages' => $pages,
        ]);
    }

    public function actionEdit($id)
    {
        $one = Tasks::getOne($id);

        if($_POST['Tasks']['status'] == 'Open') {
            $one->type = $_POST['Tasks']['type'];
            $one->description = $_POST['Tasks']['description'];
            $one->status = $_POST['Tasks']['status'];
            $one->start_at = date('Y-m-d H:i:s');

            if($one->validate() && $one->save()){
                Yii::$app->session->setFlash('success', "Your task updated successfully. By the way I am waiting for the best offer :)");
                return $this->redirect(['index']);
            }
        }
        else if($_POST['Tasks']['status'] == 'Closed') {
            $one->type = $_POST['Tasks']['type'];
            $one->description = $_POST['Tasks']['description'];
            $one->status = $_POST['Tasks']['status'];
            $one->complete_at = date('Y-m-d H:i:s');

            if($one->validate() && $one->save()){
                Yii::$app->session->setFlash('success', "Your task updated successfully. By the way I am waiting for the best offer :)");
                return $this->redirect(['index']);
            }
        }
        else if($_POST['Tasks']['status'] == 'Waiting for start') {
            $one->type = $_POST['Tasks']['type'];
            $one->description = $_POST['Tasks']['description'];
            $one->status = $_POST['Tasks']['status'];

            if($one->validate() && $one->save()){
                Yii::$app->session->setFlash('success', "Your task updated successfully. By the way I am waiting for the best offer :)");
                return $this->redirect(['index']);
            }
        }

        return $this->render('edit', ['one' => $one]);
    }

    public function actionCreate()
    {
        $model = new Tasks();

        if($_POST['Tasks']) {
            $model->attributes = $_POST['Tasks'];

            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', "Your task created successfully. By the way I am waiting for the best offer :)");
                return $this->redirect(['index']);
            }
        }
        return $this->render('create', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model = Tasks::getOne($id);
        if($model !== null) {
            $model->delete();
            Yii::$app->session->setFlash('success', "Your task deleted successfully. By the way I am waiting for the best offer :)");
            return $this->redirect(['index']);
        }
    }

    public function actionShow($id)
    {
        $one = Tasks::getOne($id);
        return $this->render('show', ['one' => $one]);
    }

}
