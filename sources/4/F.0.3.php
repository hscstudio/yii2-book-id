<?php
use app\widgets\Alert;
echo Alert::widget();

if (Yii::$app->session->hasFlash('success')){
    echo '<br>Nama : '.$model->nama;
    echo '<br>Pesan : '.$model->pesan;
}
