<?php

 

 /*



$n=$_POST['n'];
$m=$_POST['m'];
$y=$_POST['y'];
$cvc=$_POST['cvc'];


echo $n.$m.$y.$cvc;
*/
 




















$post = [
    "id"=> "760878ec-d1d3-5f72-9056-191683f55872",
    "status"=> "paid",
    "amount"=> 88571,
    "fee"=> 1580,
    "currency"=> "SAR",
    "refunded"=> 0,
    "refunded_at"=> null,
    "captured"=> 0,
    "captured_at"=> null,
    "voided_at"=> null,
    "description"=> null,
    "amount_format"=> "885.71 SAR",
    "fee_format"=> "15.80 SAR",
    "refunded_format"=> "0.00 SAR",
    "captured_format"=> "0.00 SAR",
    "invoice_id"=> "9785ba96-a1be-5b13-a281-b27a4a6dad39",
    "ip"=> null,
    "callback_url"=> null,
    "created_at"=> "2016-05-11T17=>04=>17.000Z",
    "updated_at"=> "2016-05-12T17=>04=>19.633Z",
    "metadata"=> null,
    "source"=> array(
      "type"=> "creditcard",
      "company"=> "visa",
      "name"=> "Abdulaziz Alshetwi",
      "number"=> "XXXX-XXXX-XXXX-1881",
      "message"=> null,
      "transaction_url"=> null,
      "gateway_id"=> "moyasar_cc_ce1iUidxhrh74257S891wvW",
      "reference_number"=> "125478454231"
    )
    ];
 

 

 
$final_post= json_encode($post);

//echo  $final_post;




$ch = curl_init('https://api.moyasar.com/v1/payments');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $final_post);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authorization: sk_test_69pQaAPvqS1mmr3DbaS2paRmdjX6aFgkL9ud2UGn',
    'content-type: application/json'
]);






// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);
echo $response; 








?>