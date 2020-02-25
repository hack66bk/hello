<?php

$http_client_ip =&_SERVER["HTTP_CLIENT_IP"];
$http_forwarded_for = &_SERVER["HTTP_FORWARDED_FOR"];
$remote_addr = &_SERVER["REMOTE_ADDR"];

if(!empty($http_client_ip))
{
	$ipaddress=$http_client_ip;
}
else if(!empty($http_forwarded_for))
{
	$ipaddress=$http_forwarded_for;
}
else if(!empty($remote_addr))
{
	$ipaddress=$remote_addr;
}
echo $ipaddress;
?>


