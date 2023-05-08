<?php 
$url;
if($_SERVER['SERVER_NAME'] == 'localhost'){
    $url = "https://".$_SERVER['SERVER_NAME']."/bitswits";
}
elseif($_SERVER['SERVER_NAME'] == '127.0.0.1'){
    $url = "https://".$_SERVER['SERVER_NAME']."/bitswits";
}
else{
    $url = "https://".$_SERVER['SERVER_NAME'];
}
?>