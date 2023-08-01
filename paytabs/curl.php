<?php   








$post = [
     
    "profile_id"=> "102315",
    "tran_type"=> "sale",
    "tran_class"=> "ecom" ,
    "cart_id"=>"4244b9fd-c7e9-4f16-8d3c-4fe7bf6c48ca",
    "cart_description"=> "Dummy Order 35925502061445345",
    "cart_currency"=> "AED",
    "cart_amount"=> 46.17,
    "callback"=> "https://yourdomain.com/yourcallback",
    "return"=> "https://yourdomain.com/yourpage"


,
    "customer_details" => array(


        "name" => "John Smith",
        "email" => "jsmith@gmail.com",
        "street1" => "404, 11th st, void",
        "city" => "Dubai",
        "country" => "AE",
        "ip" => "94.204.129.89"
    )
      ,

      "card_details"=> array(
        "pan" => "4111111111111111",
        "cvv"=> "123",
        "expiry_month"=> 12,
        "expiry_year"=> 20

        )
      



     
];

$final_post= json_encode($post);

//var_dump($post);




$ch = curl_init('https://secure.paytabs.sa/payment/request');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $final_post);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authorization: SRJN6GZMWK-J6R2BNMWN9-RZ69DH2ZNK',
    'content-type: application/json'
]);






// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);
echo $response; 
// do anything you want with your response
//var_dump($response);







 

?>  