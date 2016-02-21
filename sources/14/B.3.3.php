Yii::$app->db->createCommand()->insert('province', [
    'id' => $provinces['province_id'],
    'name' => $provinces['province']
])->execute();
