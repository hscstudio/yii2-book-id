<?php
if (Yii::$app->session->hasFlash('success')){
    echo '<div class="alert alert-success">';
    echo Yii::$app->session->getFlash('success');
    echo '</div>';
    echo '<br>Nama : '.$model->nama;
    echo '<br>Pesan : '.$model->pesan;
}
else if (Yii::$app->session->hasFlash('error')){
    echo '<div class="alert alert-danger">';
    echo Yii::$app->session->getFlash('error');
    echo '</div>';
}
