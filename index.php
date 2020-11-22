<?php

// header("Location:https://ezsupplymanager.com/home");

$qr_info_url = $_SERVER['REQUEST_URI'];
$qr_info_urls = explode("/", $qr_info_url);
print_r($qr_info_urls[count($qr_info_urls) - 2]);
if($qr_info_urls[count($qr_info_urls) - 2] == "qrinfo"){
//  header("Location:qrview.php?id=" . $qr_info_urls[count($qr_info_urls) - 1]);
}
else{
    header("Location:home.php");
}   
?>