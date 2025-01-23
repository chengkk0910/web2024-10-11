<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// fix cors
header('Access-Control-Allow-Origin: *');

// curl
//init curl
$ch = curl_init();

$url = 'https://data.moenv.gov.tw/api/v2/gp_p_01?api_key=58d6040c-dca7-407f-a244-d0bfdfa8144a&limit=1000&sort=ImportDate%20desc&format=JSON';
//curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , $url);
// false 顯示
// true 不顯示
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

echo $result;

// $result = curl_exec($ch);
//關閉連線
curl_close($ch);

// dd($result);

// $data = json_decode($result);
// dd($data);

// json_decode json to array
// json_encode array to json