<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="cek-ongkir-form">
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'origin')->textInput() ?>
<?= $form->field($model, 'destination')->textInput() ?>
<?= $form->field($model, 'weight')->textInput(['value'=>1000]) ?>
<?= $form->field($model, 'courier')->dropDownList([
    'jne'=>'JNE',
    'pos'=>'POS',
    'tiki'=>'TIKI',
]) ?>
<div class="form-group">
    <?= Html::submitButton('Cek Ongkir', [
        'class' => 'btn btn-success'
    ]) ?>
</div>
<?php ActiveForm::end(); ?>
</div>
