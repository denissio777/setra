<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Create';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to create task:</p>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
    <?= $form->field($model, 'type')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'description')->textInput(['autofocus' => true]) ?>
    <?=
    $form->field($model, 'status')->dropDownList([
        'Waiting for start' => 'Waiting for start',
        'Open' => 'Open',
        'Closed' => 'Closed',
    ]);
    ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Create', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <div class="col-lg-offset-1" style="color:#999;">
        You may call me <strong>+380977711778</strong> or <strong>text me</strong> denissio_developer@ukr.net<br>
        Let's collaborate and develop something amazing! Have a nice day :)
    </div>
</div>
