<div class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <!-- TAMBAHKAN WIDGET ALERT DISINI INI -->
    <?= \app\widgets\Alert::widget(); ?>    
    <?= $content ?>
</div>
