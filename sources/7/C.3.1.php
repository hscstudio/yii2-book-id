<?php \yii\widgets\Pjax::begin(['timeout'=>5000, 'id'=>'pjax-gridview']); ?>
<?= GridView::widget([
...
]); ?>
<?php \yii\widgets\Pjax::end() ?>
