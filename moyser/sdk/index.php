<?php

include_once 'vendor/autoload.php';

\Moyasar\Moyasar::setApiKey('sk_test_69pQaAPvqS1mmr3DbaS2paRmdjX6aFgkL9ud2UGn');



$paymentService = new \Moyasar\Providers\PaymentService();

//$payment = $paymentService->fetch('ae5e8c6a-1622-45a5-b7ca-9ead69be722e');





$paymentService = new \Moyasar\Providers\PaymentService();

$paginationResult = $paymentService->all();

$payments = $paginationResult->result;
print_r($payments);






?>