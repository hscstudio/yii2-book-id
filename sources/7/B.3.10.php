<?php $form = ActiveForm::begin([
    'options' => [
        'id' => 'formX',
    ],
    'action' => ['create'],
    'method' => 'post',
]); ?>
<?= $form->field($model, 'title')->textInput() ?>
<?= $form->field($model, 'price')->textInput() ?>
<div class="form-group">
    <?= Html::submitButton('Add to list', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>
