'on beforeRequest' => function () {
    $db = Yii::$app->db;
    $maintenance = $db->createCommand("SELECT * FROM setting WHERE name='maintenance'")->queryOne();
    if($maintenance['value']=='yes'){
        Yii::$app->catchAll = ['site/maintenance'];
    }
},
