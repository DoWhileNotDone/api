<?php

require "vendor/autoload.php";

$url = "https://requestb.in/pb2zzcpb";
$data = ["name" => "daveg" , "email" => "dgl_home@hotmail.com"];

$client = new \GuzzleHttp\Client();

$result = $client->post($url, ["json" => $data]);

echo $result->getBody();


?>
