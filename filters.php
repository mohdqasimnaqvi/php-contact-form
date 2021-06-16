<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="data" id="data">
        <button id="submit">Submit</button>
    </form>
    <?php 
        // $hasEmail = filter_has_var(INPUT_POST, 'data');
        // $hasValidEmail = filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL);
        // if($hasEmail && $hasValidEmail){
        //     echo 'Valid Email';
        // }
        // else {
        //     echo 'Please enter a valid email addresss';
        // }
        // $int = '123';
        // $result =
        //     filter_var($int, FILTER_VALIDATE_INT) ? 'is a Number' : 'Not A Number';
        // echo $result
        $array = array(
            'name' => "<= mohd qasim >=",
            'email' => "<= mohdqasim1602@gmail.com >=",
            'phone' => "<= 123-456-7890 >="
        );
        $filters = array(
            'name' => array(
                'filter' => FILTER_CALLBACK,
                'options' => "ucwords"
            ),
            'email' => FILTER_VALIDATE_EMAIL
        );
        print_r(filter_var_array($array, $filters))
    ?>
</body>
</html>
<style>
    .frjioerfjiorejfoiejfioejferiofjieorjfioerjfoerjfior{
        background-color: #f00;
    }
</style>