Pjax::begin([
    'id'=>'pjax-form','timeout'=>false,
]);
?>
    <?php
    if(Yii::$app->request->isAjax)
        echo \app\widgets\Alert::widget();
    ?>
    <?php $form = ActiveForm::begin([
        'options' => ['data-pjax' => true ]
    ]); ?>
