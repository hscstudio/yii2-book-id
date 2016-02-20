<?php
public function behaviors()
{
    return [
        'access' => [
            'class' => AccessControl::className(),
            ...
            'denyCallback' => function ($rule, $action) {
                throw new \yii\web\ForbiddenHttpException('Anda tidak diizinkan untuk mengakses halaman '.$action->id.' ini!');
            }
        ],
