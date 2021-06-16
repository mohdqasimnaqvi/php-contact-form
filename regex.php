<link rel="stylesheet" href="style.css" />
<?php
$str = "+91 123-234-3456";
$pattern = "/^(\+[0-9]{1,3} )?([0-9]{3})[- ]?([0-9]{3})[- ]?([0-9]{4})$/im";
echo preg_match($pattern, $str) === 1 ? "$str is a phone number" : "$str is not a phonenumber"; 
?>