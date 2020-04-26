<?php
$this->title = 'Tasks';
?>
<a class="btn btn-success" href="/create">Create task</a>
<a class="btn btn-warning" href="/open">Open tasks</a>
<a class="btn btn-warning" href="/completed">Completed tasks</a>
<div class="site-index">
    <div class="body-content">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Numder</th>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($tasks as $item): ?>
                <tr>
                    <th scope="row"><?= $item->id ?></th>
                    <td><?= $item->type ?></td>
                    <td><?= $item->description ?></td>
                    <td><?= $item->status ?></td>
                    <td>
                        <a class="btn btn-info" href="/show/<?= $item->id ?>">Show details</a>
                        <a class="btn btn-primary" href="/edit/<?= $item->id ?>">Edit</a>
                        <a class="btn btn-danger" href="/delete/<?= $item->id ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <?php
        use yii\widgets\LinkPager;
        echo LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
    </div>
</div>