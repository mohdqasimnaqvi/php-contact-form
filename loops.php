<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Loopps</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    //todo: Loops
    //info: 1. for
    //info: 2. while
    //info: 3. do...while
    //info: 4. foreach
    
    //todo: for loop
    //info: @params - init, condition, increment
    $array = array('hello', 'the', 'world', 'of', '==<' , 'php', '>==');
    $greet = "";
    for ($i = 0; $i < count($array); $i++) { 
        $item = $array[$i];
        $greet = "$greet $item";
    }
    // echo $greet;
    //todo: while loop
    //info: @params - condition
    $ii = 0;
    while($ii <= 10){
        // echo "==< $ii >== <br/>";
        $ii++;
    }
    //todo: do...while loop
    //info: @params - condition
    $ij = 0;
    do{
        // echo "==< $ij >== <br/>";
        $ij++;
    }
    while($ij <= 10);
    //todo: foreach loop
    //info: @params - array, variable
    // $phpGreet = "";
    // foreach($array as $item){
    //     $phpGreet = "$phpGreet $item";
    // }
    // echo $phpGreet;
    //info: foreach ( unlike foreach in ==< javascript >== ) 
    //info: can be used in objects too!
    $obj = array(
        'Brad' => 'me@bradtraversy.com',
        'John' => 'john@example.com',
        'Qasim' => 'mohdqasimnaqvi1602@gmail.com');
    foreach ($obj as $name => $email) {
        echo "$name's email is $email <br/>";
    };

?>
</body>
</html>