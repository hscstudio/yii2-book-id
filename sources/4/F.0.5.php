<?php
if (Yii::$app->session->hasFlash('success')){
    echo '<br>Nama : '.$model->nama;
    echo '<br>Pesan : '.$model->pesan;
}
