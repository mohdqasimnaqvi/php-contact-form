<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays & Objects</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //todo: Array Types
    //info: 1 Indexed
    //info: 2 associative
    //info: 3 Multidemendional

    //todo: Indexed arrays
    //note: there are two ways to make indexed arrays
    //info: 1: using the array function
    $ids = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
    //info: 2. using [] like in ==< javascript >==
    $cars = array('Honda', 'Toyota', 'Ford');
    $cars[] = '==< B M W >==';
    // print_r($cars);
    // var_dump($cars)
    //todo: associative arrays
    //info: associative arrays are like objects in ==< javascript >==
    //info: associative arrays start with the key, then => ,then the value 
    $vehicles = array(
        array(
            'Color' => 'red',
            'Wheels' => 4,
            'type' => 'car'
        ),
        array(
            'Color' => 'red',
            'Wheels' => 3,
            'type' => 'car'
        ),
        array(
            'Color' => 'green',
            'Wheels' => 2,
            'type' => 'bike'
        )
    );
    echo $vehicles[2]['Color']
    ?>
</body>

</html>