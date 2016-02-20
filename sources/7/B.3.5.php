public function getProvinces()
{
    return (new \yii\db\Query())
        ->select('*')
        ->from('province')
        ->orderBy(['name' => SORT_DESC])
        ->all(\yii::$app->db);
}
