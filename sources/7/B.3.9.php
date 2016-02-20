$this->registerJs('

    $("#dynamicmodel-city_id").attr("disabled",true);
    $("#dynamicmodel-province_id").change(function() {
        $.get("'.Url::to(['get-cities','province_id'=>'']).'" + $(this).val(), function(data) {
            select = $("#dynamicmodel-city_id")
            select.empty();
            var options = "<option value=\'\'>-Choose a city-</option>";
            $.each(data.cities, function(key, value) {
                options += "<option value=\'"+value.id+"\'>"+ value.name +"</option>";
            });
            select.append(options);
            $("#dynamicmodel-city_id").attr("disabled",false);
        });
    });

');
