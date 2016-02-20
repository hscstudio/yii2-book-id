<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$form = ActiveForm::begin();
$data = ArrayHelper::map($books, 'id', 'title');
echo $form->field($model, 'title')->dropDownList($data,[
    'prompt'=>'-Choose a title-',
]);
echo $form->field($model, 'author')->textInput();
echo $form->field($model, 'year')->textInput();
ActiveForm::end();
