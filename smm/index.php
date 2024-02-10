<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   
  </head>
  <body>
    






























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>







<?php

//error_reporting(E_ERROR | E_PARSE);


class Api
{
    /** API URL */
    public $api_url = 'https://secsers.com/api/v2';

    /** Your API key */
    public $api_key = '87d3a67c630b23ec82c18b34cb0902f4';

    /** Add order */
    public function order($data)
    {
        $post = array_merge(['key' => $this->api_key, 'action' => 'add'], $data);
        return json_decode($this->connect($post));
    }

    /** Get order status  */
    public function status($order_id)
    {
        return json_decode(
            $this->connect([
                'key' => $this->api_key,
                'action' => 'status',
                'order' => $order_id
            ])
        );
    }

    /** Get orders status */
    public function multiStatus($order_ids)
    {
        return json_decode(
            $this->connect([
                'key' => $this->api_key,
                'action' => 'status',
                'orders' => implode(",", (array)$order_ids)
            ])
        );
    }

    /** Get services */
    public function services()
    {
        return json_decode(
            $this->connect([
                'key' => $this->api_key,
                'action' => 'services',
            ])
        );
    }

    /** Refill order */
    public function refill(int $orderId)
    {
        return json_decode(
            $this->connect([
                'key' => $this->api_key,
                'action' => 'refill',
                'order' => $orderId,
            ])
        );
    }

    /** Refill orders */
    public function multiRefill(array $orderIds)
    {
        return json_decode(
            $this->connect([
                'key' => $this->api_key,
                'action' => 'refill',
                'orders' => implode(',', $orderIds),
            ]),
            true,
        );
    }

    /** Get refill status */
    public function refillStatus(int $refillId)
    {
         return json_decode(
            $this->connect([
                'key' => $this->api_key,
                'action' => 'refill_status',
                'refill' => $refillId,
            ])
        );
    }

    /** Get refill statuses */
    public function multiRefillStatus(array $refillIds)
    {
         return json_decode(
            $this->connect([
                'key' => $this->api_key,
                'action' => 'refill_status',
                'refills' => implode(',', $refillIds),
            ]),
            true,
        );
    }

    /** Cancel orders */
    public function cancel(array $orderIds)
    {
        return json_decode(
            $this->connect([
                'key' => $this->api_key,
                'action' => 'cancel',
                'orders' => implode(',', $orderIds),
            ]),
            true,
        );
    }

    /** Get balance */
    public function balance()
    {
        return json_decode(
            $this->connect([
                'key' => $this->api_key,
                'action' => 'balance',
            ])
        );
    }

    private function connect($post)
    {
        $_post = [];
        if (is_array($post)) {
            foreach ($post as $name => $value) {
                $_post[] = $name . '=' . urlencode($value);
            }
        }

        $ch = curl_init($this->api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        if (is_array($post)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, join('&', $_post));
        }
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        $result = curl_exec($ch);
        if (curl_errno($ch) != 0 && empty($result)) {
            $result = false;
        }
        curl_close($ch);
        return $result;
    }
}

// Examples




$order_id=$_GET["order_id"];


if (isset($_GET["order_id"])) {
    

    $api = new Api();

    $services = $api->services(); # Return all services
    
    $balance = $api->balance();  

    $status = $api->status($order_id);

$status  =json_encode($status );


//print_r($status );

$array = json_decode($status, true);















echo '



<table class="table table-bordered">
<thead>
  <tr>
     
    
    <th class="text-center" scope="col">Status</th>
    <th class="text-center" scope="col">Remains</th>
  </tr>
</thead>



';

 

echo '


<tbody>


  <tr>
   
     
    <td class="text-center">'.$array['status'].'</td>
    <td class="text-center">'.$array['remains'].'</td>

    


  </tr>
  
</tbody>
</table>

';








echo '



<table class="table table-bordered">
<thead>
  <tr>
     
    
    <th class="text-center" scope="col">الحالة</th>
    <th class="text-center" scope="col">المتبقي</th>
  </tr>
</thead>



';

 

echo '


<tbody>


  <tr>
   
     
    <td class="text-center">'.$array['status'].'</td>
    <td class="text-center">'.$array['remains'].'</td>

    


  </tr>
  
</tbody>
</table>

';
















/*

echo "Start count= ".$array['start_count'];
echo "<br>";
echo "Status= ".$array['status'];
echo "<br>";
echo "Remains= ".$array['remains'];
echo "<br>";

echo "<br>";
 


echo "العدد قبل= ".$array['start_count'];
echo "<br>";
echo "حالة الطلب= ".$array['status'];
echo "<br>";
echo "الباقي= ".$array['remains'];
echo "<br>";

 */


}
else{

    echo " no order id ";
    echo "<br>";
    echo "   يجب ارفاق رقم الطلب نهاية الرابط ";
}




?>


 
<table class="table table-bordered" style="background-color:#d3d3d3;">
  <thead>
    <tr>
     
      <th class="text-center" scope="col">الحالة</th>
      <th class="text-center" scope="col">الوصف </th>
      
    </tr>
  </thead>
  <tbody>

    <tr>
      <td class="text-center">Pending</td>
      <td class="text-center"> 
        
      طلبك قيد الانتظار 
      </td>

    </tr>
    


    <tr>
      <td class="text-center">In progress</td>
      <td class="text-center"> 
        
      طلبك قيد التنفيذ  
      </td>

    </tr>



    <tr>
      <td class="text-center">Processing</td>
      <td class="text-center"> 
        
      طلبك قيد المعالجة  
      </td>

    </tr>


    <tr>
      <td class="text-center">Completed</td>
      <td class="text-center"> 
        
      تم الانتهاء من تنفيذ طلبك 
      </td>

    </tr>










    <tr>
      <td class="text-center">Partial</td>
      <td class="text-center"> 
        
     تم تنفيذ طلبك بشكل جزئي فتواصل معنا لتعويضك 
      </td>

    </tr>




    <tr>
      <td class="text-center">Canceled</td>
      <td class="text-center"> 
        
  تم الغاء طلبك من قبل النظام ,تواصل معنا لاعادة تنفيذ الطلب 
      </td>

    </tr>

 

   
  </tbody>
</table>