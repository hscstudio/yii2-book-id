public function actionGetCekResi($resi='2784499770009')
{
    $client = new Client();
    $response = $client->createRequest()
        ->setMethod('post')
        ->setUrl('http://api.cekresi.co.id/cnote.php')
        ->setData(['id' => $resi])
        ->send();
    if ($response->isOk) {
        echo ($response->content);
    }
}
