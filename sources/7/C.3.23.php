<?php
$this->registerJs('
    var currentData = "";    
    var source = new EventSource("'.Url::to(['category/check']).'");
    source.onmessage = function(event) {
        var data = JSON.parse(event.data); 
        if(currentData!=data.lastId){            
            currentData = data.lastId;    
            $.pjax({
                url:"'.Url::to(['category/index']).'",
                container:"#gridview",
                timeout:false,
                push: false,
            }).done(function(data) { 
            });
        }
    }, false);
');
