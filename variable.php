<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    //todo: Variables
    //info Start with $
    //info name can only start with letters and underscores
    //info name can only contain letters , numbers and unserscores
    //info case sensetive
    $output = 'Hello world!!';
    //todo: data types
    //info: 1. Strings
    //info: 2. Integers
    //info: 3. Floats
    //info: 4. Booleans
    //info: 5. Arrays
    //info: 5. Objects
    //Note: For info on Objects and arrays i have arrays.php
    //info: 6. null
    //info: 7. Resource
    $str = 'String';
    $int = 4;
    $float = 4.4;
    $bool = true;
    //todo: concatination, adding, substraction, multiplication, division
    //info: to cancatinate your strings add a .
    //info: to add your numbers add a + 
    //info: to divide add a / 
    //info: to multiply add a *
    //info: and to subtract add a -
    $num1 = 5;
    $num2 = 10;
    $num3 = $num1 + $num2;
    $str1 = 'hello';
    $str2 = 'world';
    $greet = $str1 . ' ' .'world';
    $greeting = "$str1 $str2";
?>
</body>
</html>