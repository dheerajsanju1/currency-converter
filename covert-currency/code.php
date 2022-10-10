<?php
   if(isset($_POST['submit']))
   {
        $from=$_POST['from'];
        $to=$_POST['to'];
        $amount=$_POST['amount'];

        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://currency-conversion-and-exchange-rates.p.rapidapi.com/convert?from=$from&to=$to&amount=$amount",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: currency-conversion-and-exchange-rates.p.rapidapi.com",
                "X-RapidAPI-Key: 48235df41amsha89f454882d6fedp10e585jsna96ab7394e3a"
            ],
            ]);
            $response = curl_exec($curl);
            $response=json_decode($response,true);
            $err = curl_error($curl);


            $convert=$response['result'];
      
    }
?>