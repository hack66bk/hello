<?php


include('UserInformation.php');

echo "my ip:" .UserInfo::get_ip();
echo "<br>";
echo "my os:" .UserInfo::get_os();
echo "<br>";
echo "my browser:" .UserInfo::get_browser();
echo "<br>";
echo "my device:" .UserInfo::get_device();
echo "<br>";

?>