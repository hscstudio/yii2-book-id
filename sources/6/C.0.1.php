<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        //'id',
        'title',
        'description',
        'created_at',
        // 'updated_at',
        'created_by',
        // 'updated_by',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
