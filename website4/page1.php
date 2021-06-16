<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
</head>
<body  style="
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">
    <h1>Hello <?php echo $_COOKIE['name']; ?>, Your Email is <?php echo $_COOKIE['email'] ?></h1>
    
</body>
</html>