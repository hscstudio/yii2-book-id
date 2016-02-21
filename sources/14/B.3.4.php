public function actionGetCity($id=0, $province=0)
{
    $client = new Client();
    $addUrl=($id>0)?'id='.$id.'&':'';
    $addUrl.=($province>0)?'province='.$province:'';
    $response = $client->createRequest()
        ->setFormat(Client::FORMAT_JSON)
        ->setMethod('get')
        ->setUrl('http://api.rajaongkir.com/starter/city?'.$addUrl)
        ->addHeaders([
            'key' => 'a23e919238410e7c80af93851a55405c',
        ])
        ->send();
    if ($response->isOk) {
        $content = \Yii\helpers\Json::decode($response->content);
        // $content['rajaongkir']['query']
        // $content['rajaongkir']['status']
        $results = $content['rajaongkir']['results'];
        if($id>0){
            if(count($results)>0) {
                echo "<h1>".$results['province_id']." - ".$results['province']."</h1>";
                echo $results['city_id']." - ".$results['city_name']." - ".$results['type']." - ".$results['postal_code']."<br>";
            }
            else{
                echo 'blank';
            }
        }
        else{
            if(count($results)>0) {
                $last_province = 0;
                foreach ($results as $cities) {
                    if ($last_province != $cities['province_id']) {
                        echo "<h1>" . $cities['province_id'] . " - " . $cities['province'] . "</h1>";
                        $last_province = $cities['province_id'];
                    }
                    echo $cities['city_id'] . " - " . $cities['city_name'] . " - " . $cities['type'] . " - " . $cities['postal_code'] . "<br>";
                }
            }
            else{
                echo 'blank';
            }
        }
    }
    else{
        $content = \Yii\helpers\Json::decode($response->content);
        echo $content['rajaongkir']['status']['description'];
    }
}
