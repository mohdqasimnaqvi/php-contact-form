<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dates</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $my_tutors_birthday = mktime(10,14,54,9,10,1981);
        $date =  date('l d/m/Y h:i:sa', $my_tutors_birthday);
        $time = strtotime($date);
        if($time == $my_tutors_birthday){
            echo 'Went well<br>';
        }
        else {
            echo "Something went wrong<br>$time<br>$my_tutors_birthday<br>";
        }
        echo date('l d/m/Y h:i:sa', $time);
        
    ?>
</body>
</html>