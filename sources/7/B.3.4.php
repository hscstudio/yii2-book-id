$this->registerJs('

    $("#dynamicmodel-title").change(function() {
        $.get("'.Url::to(['get-book','id'=>'']).'" + $(this).val(), function(data) {
              $("#dynamicmodel-author").val(data.book.author);
              $("#dynamicmodel-year").val(data.book.year);
        });
    });

');
