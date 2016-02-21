<?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

...

<div class="row">
    <div class="col-md-4">
        <?= $form->field($model, 'start')->widget(\kartik\widgets\DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter start event...'],
            'removeButton' => false,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd',
            ]
        ]) ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'end')->widget(\kartik\widgets\DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter end event...'],
            'removeButton' => false,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd',
            ]
        ]) ?>
    </div>
</div>

...
