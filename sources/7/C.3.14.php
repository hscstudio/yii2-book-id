<?php
$this->registerJs('
    $("#pjax-form").on("pjax:end", function() {
        $.pjax.reload("#pjax-gridview",{
            "timeout": false,
            "url": "'.\yii\helpers\Url::to(['index']).'",
            "replace": false,
        });
    });
');
