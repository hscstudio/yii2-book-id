<?php
use \yii\helpers\Url;
// URL ke home atau web index
echo Url::home();
// URL ke current Controller
echo Url::to();
// URL ke current Controller pada Action create
echo Url::to(['create']);
// URL ke person Controller pada Action index
echo Url::to(['person/index']);
// URL ke current Controller pada Action index
// dengan paramater nama yang bernilai Hafid
echo Url::to(['person/index','nama'=>'Hafid']);
