$client = new Client();
$response = $client->createRequest()
            ->setFormat(Client::FORMAT_JSON)
            ->setMethod('get')
            ->setUrl('http://www.bi.go.id/id/moneter/informasi-kurs/transaksi-bi/Default.aspx')
            ->send(); 
if ($response->isOk) {
