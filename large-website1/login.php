<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css" />
</head>
<body style="
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">
    <?php 
                session_start();
        if(isset($_POST['submit'])){
                $_SESSION['name'] = htmlentities($_POST['name']);
                $_SESSION['email'] = htmlentities($_POST['email']);
                header('Location: page2.php');
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" class="container" method="POST" style="width: 500px;">
        <div class="form-group">
            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $_SESSION['name']?>"/>
        </div>
        <div class="form-group">
            <label for="email">Email: </label><br>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $_SESSION['email']?>"/>
        </div>
        <button class="btn btn-secondary" name="submit">Submit</button>
    </form>
</body>
</html>