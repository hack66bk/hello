<?php
$nabajit=fopen("iplog.txt","a");
$cip=$_SERVER['HTTP_CLIENT_IP'];
$proxy=$_SERVER['HTTP_X_FORWARDED_FOR'];
$rip=$_SERVER['REMOTE_ADDR'];

if(!empty($cip))
{
 fwrite($nabajit, "Your IP address : ". $cip."\r\n\r\n");
}
elseif(!empty($proxy))
{
fwrite($nabajit, "Your IP address : ". $proxy."\r\n\r\n");
}
else
{
fwrite($nabajit, "Your IP address :". $rip."\r\n\r\n");
}

$brow=$_SERVER['HTTP_USER_AGENT'];
fwrite($nabajit, "Your browser and OS is :". $brow."\r\n");
fclose($nabajit);

?>

<html>
<body>

<img src="nb.JPEG" alt="Happy New Year 2019" class="center" height="500" width="500">
</body>
</html>