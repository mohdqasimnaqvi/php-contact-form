<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    //todo: FUNCTIONS
    function likeJS($str = 'How are you doing today?'){
        return explode(" " ,$str);
    }
    $num = 1;
    function unLikeJS(&$number){
        $number += 13289;
    }
    unLikeJS($num);
    echo $num;
?>
</body>
</html>