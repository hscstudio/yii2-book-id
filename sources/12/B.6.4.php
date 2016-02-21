<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'username',
    ],
]) ?>

<table class="table table-striped">
    <tr>
        <th>Modules</th>
        <th>Controllers</th>
        <th>Actions</th>
        <th>Auth</th>
    </tr>
    <?php
    foreach($routes as $row) {
        ?>
        <tr >
            <td><?= $row['module']?></td >
            <td><?= $row['controller']?></td >
            <td><?= $row['action']?></td >
            <td><?= Html::checkbox('auth[]',$row['auth']); ?></td >
        </tr >
        <?php
    }
    ?>
</table>
