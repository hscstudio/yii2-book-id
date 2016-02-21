use hscstudio\mimin\components\Mimin;
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ...,
        [
          'class' => 'yii\grid\ActionColumn',
          'template' => Mimin::filterActionColumn([
              'view','update','delete'
          ],$this->context->route),
          ...
        ]
    ]
]);
