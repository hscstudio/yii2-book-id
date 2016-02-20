[
    'class' => 'yii\grid\ActionColumn',
    'buttons' => [
        'view' => function ($url, $model) {
            $icon='<span class="glyphicon glyphicon-eye-open"></span>';
            return Html::a($icon,$url,[
                'data-toggle'=>"modal",
                'data-target'=>"#categoryModal",
            ]);
        },
        'update' => function ($url, $model) {
            $icon='<span class="glyphicon glyphicon-pencil"></span>';
            return Html::a($icon,$url,[
                'data-toggle'=>"modal",
                'data-target'=>"#categoryModal",
            ]);
        },
