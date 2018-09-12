<?php


//////GET
/* $ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"localhost/api-php/index.php/data");
curl_setopt($ch, CURLOPT_POST, false);
// curl_setopt($ch, CURLOPT_POSTFIELDS,
            //"postvar1=value1&postvar2=value2&postvar3=value3");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
echo "GET : ".curl_getinfo($ch, CURLINFO_EFFECTIVE_URL)."\r\n";
curl_close($ch);

echo $server_output;
 */
$ch = curl_init();
$data = array("nama_produk" => "test", "tipe_produk" => "aa","harga"=>"1000","stok"=>"20");                                                                    
$data_string = json_encode($data);
curl_setopt($ch, CURLOPT_URL,"http://localhost/apiphp/api.php");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);   
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                   
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string),
    'Authorization: Basic '.base64_encode('indra123455')
    )                                                                       
);                                                                                                                   
    
$server_output = curl_exec($ch);
// echo "GET : ".curl_getinfo($ch, CURLINFO_EFFECTIVE_URL)."\r\n";
curl_close($ch);

echo $server_output;

?>

