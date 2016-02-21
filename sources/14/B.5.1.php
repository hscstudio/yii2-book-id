<?php
// URL Payment IPAYMU
$url = 'https://my.ipaymu.com/payment.htm';

// Prepare Parameters
$params = array(
            'key'      => 'ganti dengan API KEY kamu', // API Key Penjual
            'action'   => 'payment',
            'product'  => 'Kaos Yii',
            'price'    => '101000', // Total Harga
            'quantity' =>  2,
            'comments' => 'Coba-coba aja', // Optional           
            'ureturn'  => 'http://localhost/ipaymu/return.php',
            'unotify'  => 'http://localhost/ipaymu/notify.php',
            'ucancel'  => 'http://localhost/ipaymu/cancel.php',

            /* Parameter untuk pembayaran lain menggunakan PayPal 
             * ----------------------------------------------- */
            'paypal_email'   => 'ganti dengan email paypal kamu',
            'paypal_price'   => 1, // Total harga dalam kurs USD
            'invoice_number' => uniqid('INV-'), // Optional
            /* ----------------------------------------------- */
            
            'format'   => 'json' // Format: xml / json. Default: xml 
        );

$params_string = http_build_query($params);

//open connection
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($params));
curl_setopt($ch, CURLOPT_POSTFIELDS, $params_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

//execute post
$request = curl_exec($ch);

if ( $request === false ) {
    echo 'Curl Error: ' . curl_error($ch);
} else {
    
    $result = json_decode($request, true);

    if( isset($result['url']) )
        header('location: '. $result['url']);
    else {
        echo "Request Error ". $result['Status'] .": ". $result['Keterangan'];
    }
}

//close connection
curl_close($ch);
