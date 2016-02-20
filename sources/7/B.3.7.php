<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
$form = ActiveForm::begin();
$data = ArrayHelper::map($provinces, 'id', 'name');
echo $form->field($model, 'province_id')->dropDownList($data,[
    'prompt'=>'-Choose a province-',
]);
echo $form->field($model, 'city_id')->dropDownList([],[
    'prompt'=>'-Choose a city-',
]);
ActiveForm::end();
