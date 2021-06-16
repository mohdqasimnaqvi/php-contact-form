<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
    
    <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
</head>
<body  style="
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">
    <h1>
    <?php 
        $user = array(
            'name' => 'Haider',
            'age' => 31389028,
            'email' => 'test@gmail.com'
        );
        setcookie('hello', serialize($user), time() + (3600 * 24));
        $userGet = unserialize($_COOKIE['hello']);

        echo $userGet['name']
    ?>
    </h1>
</body>
</html>