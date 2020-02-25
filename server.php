<?Php
$ip=$_SERVER['REMOTE_ADDR'];
echo "IP address= $ip";


$ip2=$_SERVER['HTTP_X_FORWARDED_FOR'];

echo "Proxy address=$ip2";


$_SERVER['SERVER_NAME'] = www.plus2net.com

while (list ($key, $val) = each ($_SERVER))
 { 

echo "$key -> $val <br> ";

}

?>

