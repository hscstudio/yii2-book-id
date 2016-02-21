<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Event Calendar';
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
?>
<div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $eventUrl = Url::to(['event-calendar']); ?>
    <?= hscstudio\calendar\FullCalendar::widget([
        'options'=>[
            'id'=>'calendar',
            'header'=>[
                'left'=>'prev,next today',
                'center'=>'title',
                'right'=>'month,agendaWeek,agendaDay',
            ],
            'editable'=> true,
            'eventLimit'=>true, // allow "more" link when too many events
            'events' => [
                'url' => $eventUrl,
            ],
        ]
    ]) ?>
</div>
