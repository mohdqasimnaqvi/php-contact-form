<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
</head>
<body style="
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">
<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $expiry = time() + (3600 * 24);
        setcookie('name', $name, $expiry);
        setcookie('email', $email, $expiry);
        header('Location: page1.php');
    }
    $prevName = isset($_COOKIE['name']) ? $_COOKIE['name'] : '';
    $prevEmail= isset($_COOKIE['email']) ? $_COOKIE['email'] : '';
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" class="container" method="POST" style="width: 500px;">
        <div class="form-group">
            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $prevName?>"/>
        </div>
        <div class="form-group">
            <label for="email">Email: </label><br>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $prevEmail?>"/>
        </div>
        <button class="btn btn-secondary" name="submit">Submit</button>
    </form>
</body>
</html>