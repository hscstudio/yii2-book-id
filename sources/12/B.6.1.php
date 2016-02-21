<?php
use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'Authorization';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            [
                'header' => 'Auth',
                'format' => 'raw',
                'value' => function ($model){
                    return Html::a("<i class='glyphicon glyphicon-lock'></i>",
                        ['view','id'=>$model->id],
                        ['class'=>'btn btn-danger btn-xs']
                    );
                }
            ]
        ],
    ]); ?>
</div>
