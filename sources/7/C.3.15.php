<?php
use yii\bootstrap\Modal;
Modal::begin([
    'id' => 'categoryModal',
]);
    Pjax::begin([
        'id'=>'pjax-modal','timeout'=>false,
        'enablePushState'=>false,
        'enableReplaceState'=>false,
    ]);

    Pjax::end();
Modal::end();
?>
