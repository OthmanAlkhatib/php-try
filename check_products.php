<?php
    // header("Content-Type:application/json; charset=utf-8");
    // include("./connect.php");
    header('Access-Control-Allow-Origin: *');
 
    // $sql_select = "SELECT * FROM `products`";
    // $result = $con->query($sql_select);
    // $sql_data = array();
    
    // While($row = $result->fetch_assoc()) {
    //     $sql_data[] = $row;
    // }

    // $product_url = $sql_data[0]['product_url'];
    $api_url = "https://softcare.sy:8001/api/get-product?url=https://www.amazon.in/3M-08578-Black-Strip-Calk/dp/B000PEZ1L4";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    
    $server_data = curl_exec($ch);
    curl_close($ch);
    var_dump(curl_error($ch));
    echo $server_data;
        