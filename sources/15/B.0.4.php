<?php
...

use wbraganca\dynamicform\DynamicFormWidget;
?>
<div class="event-form">
    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    ...

    <div class="padding-v-md">
        <div class="line line-dashed"></div>
    </div>
    <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper',
        'widgetBody' => '.container-items',
        'widgetItem' => '.tools-item',
        'limit' => 10,
        'min' => 1,
        'insertButton' => '.add-tools',
        'deleteButton' => '.remove-tools',
        'model' => $modelsTools[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'name',
            'quantity',
        ],
    ]); ?>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th class="text-center" style="width: 90px;">
                <button type="button" class="add-tools btn btn-success btn-xs"><span class="glyphicon glyphicon-plus-sign"></span></button>
            </th>
        </tr>
        </thead>
        <tbody class="container-items">
        <?php foreach ($modelsTools as $indexTools => $modelTools): ?>
            <tr class="tools-item">
                <td class="vcenter">
                    <?= $form->field($modelTools, "[{$indexTools}]name")->label(false)->textInput(['maxlength' => true]) ?>
                </td>
                <td class="vcenter">
                    <?= $form->field($modelTools, "[{$indexTools}]quantity")->label(false)->textInput() ?>
                </td>
                <td class="text-center vcenter" style="width: 90px; verti">
                    <button type="button" class="remove-tools btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus-sign"></span></button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php DynamicFormWidget::end(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
