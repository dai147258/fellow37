<?php
$clientIP = $_SERVER['REMOTE_ADDR'];
$serverIP = $_SERVER['SERVER_ADDR'];
$self = $_SERVER['PHP_SELF'];
$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$httpHost = $_SERVER['HTTP_HOST'];
$queryString = $_SERVER['QUERY_STRING'];
$documentRoot = $_SERVER["DOCUMENT_ROOT"];
$requestURI = $_SERVER["REQUEST_URI"];
ehco "浏览器IP地址:".$clientIP."<br/>";
echp "WEB地址:".$serverIP."<br/>";