Yii::$app->db->createCommand()->insert('city', [
    'id' => $cities['city_id'],
    'province_id' => $cities['province_id'],
    'name' => $cities['city_name'],
    'type' => strtolower($cities['type']),
    'postal_code' => $cities['postal_code']
])->execute();
