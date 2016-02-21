preg_match_all('#<table[^>]+>(.+?)</table>#ims', $response->content, $matches); 
$table = $matches[0][3];            
preg_match_all('#<tr>(.+?)</tr>#ims', $table, $matches2);
foreach ($matches2[0] as $key => $value) {
   preg_match_all('#<td[^>]+>(.+?)</td>#ims', $value, $matches3);
   if(isset($matches3[0][0])){
      $free = trim(strip_tags($value));
      $currency = substr($free, 0, 3);
      $sale = $matches3[0][1];
         $buy =  $matches3[0][2];
         if($currencyId=='' or $currencyId==$currency){
            $kurs[$currency] = [
               'sale' => $sale,
               'buy' => $buy,
            ];
         }
      }
  }
