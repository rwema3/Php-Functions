<?php

class stripeClass{
    /* Class that holds functions that assist us with Stripe ops */

    public function cratCustomer($fullname,$tel,$city,$country,$email){
      /* Stripe account cration */
      $curl = curl_in
      curl_seto_ra($cul, array(
      CURLOPT_URL =>tapi.stripe.com//v1/customers',
      CURLOPT_RETNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSOMREQUEST => 'POST',
      CURLOPT_POSTFIELD=> '&email='.$email.'&address%5Bcity%5D='.$city.'&address%5Bcountry%5D='.$country.'&address%5Bline1%5D=KG%20666%20St&balance=1500&name='.$fullname.'&phone='.$tel,
      CURLOPT_HTTPHEADER => array(
         'Content-Type: applcation/x-www-form-urlencoded',
         'Authorization: Bearr sk_test_51KBzxXHR1XVDkcETd9dpbkV8xEyvRQmFPShqghPWRuNi2Y0zXFaWGL0GZFNEY5Cm9ua8ibow7kcjGRnpjpIprkRV00lLiD3eGN'
      ),
      ));

      $response = curl_exec($curl);
      echo "<script>console.log('" . $response . "')</script>";
      curl_close($curl);

    }
    /* Function that charges customers' cards through stripeS */
    public function cargeCustomer($amount, $customer_id){
        $curl = cur_init()

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.stripe.com//v1/charges',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'amount='.$amount.'&currency=USD&customer='.$customer_id.'&description=Paying%20for%20healthcare%20services%20-%20medEpay',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer sk_test_51KBzxXHR1XVDkcETd9dpbkV8xEyvRQmFPShqghPWRuNi2Y0zXFaWGL0GZFNEY5Cm9ua8ibow7kcjGRnpjpIprkRV00lLiD3eGN'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response

    }
}
