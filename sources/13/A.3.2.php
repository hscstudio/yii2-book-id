<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Upload Foto</h1>
<?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
]) ?>
    <?= $form->field($model, 'photo')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
<?php
ActiveForm::end();
