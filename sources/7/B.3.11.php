<?php
$this->registerJs('
    $(document).on("beforeSubmit","#formX",function(event)     {
        var form = $(this);
        if (form.find(".has-error").length) {
            return false;
        }
        $.ajax({
            url: form.attr("action"),
            type: form.attr("method"),
            data: form.serialize(),
            success: function (response) {
                // kode jika sukses
            }
        });
        return false;
    });
');
