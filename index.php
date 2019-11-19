<?php
session_start();
$host_app = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_admin =  $host_app . 'admin';
echo "ok";
?>