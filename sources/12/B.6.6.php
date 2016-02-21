<?php
$this->registerJs('
    $(".processAuth").on("click", function (e) {
        module = $(this).attr("data-module");
        controller = $(this).attr("data-controller");
        action = $(this).attr("data-action");
        user_id = '.$model->id.';
        checked = $(this).prop("checked");
        var link = "'.Url::to(['process-auth']).'?module="+module+
            "&controller="+controller+"&action="+action+"&user_id="+user_id+
            "&checked="+checked;
        $.get(link, function(data) {
            alert(data)
        });
    });
');
