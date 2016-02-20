$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">
    <?php
    Pjax::begin(['timeout'=>false,'id'=>'pjax-gridview']);
    ?>
    
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
