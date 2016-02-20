$this->registerJs('
    /* fungsi ini akan dijalankan ketika class pjaxDelete di klik */
    $(".pjaxDelete").on("click", function (e) {
        /* cegah link menjalankan default action */
        e.preventDefault();
        if(confirm("Are you sure you want to delete this item?")){
            /* request actionDelete dengan method post */
            $.post($(this).attr("href"), function(data) {
                /* reload gridview */
                $.pjax.reload("#pjax-gridview",{"timeout":false});
            });
        }
    });
');
