<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
?>
<?php Pjax::begin(['timeout'=>false,'id'=>'gridview']); ?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ...
    ]
]); ?>
<?php Pjax::end() ?>
<?php
$this->registerJs('
    var currentData = "";
    var check = function(){
        setTimeout(function(){
            $.ajax({ url: "'.Url::to(['category/check']).'", success: function(data){
                if(currentData!=data.lastId){
                    currentData = data.lastId;    
                    $.pjax({
                        url:"'.Url::to(['category/index']).'",
                        container:"#gridview",
                        timeout:false,
                        replace: false,
                    }).done(function(data) { 
                        check();
                    });
                }
                else{
                    check();
                }
            }, dataType: "json"});
        }, 5000);
    }
    check();
');
