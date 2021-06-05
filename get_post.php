<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Poppins';
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        form {
            width: 500px;
        }

        input {
            padding: 1rem 1rem;
            font-size: 1rem;
            border-radius: 10px;
            border: 1px solid #aaa;
            width: 100%;
        }

        input:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="./get_post.php" method="POST">
            <label for="name">Name</label><br />
            <input type="text" name="name" id="name" /><br>

            <label for="email">Email</label><br />
            <input type="text" name="email" id="email" /><br>

            <label for="password">password</label><br />
            <input type="password" name="password" id="password" /><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php
    if (
        isset($_GET['password'])
        && isset($_GET['name']) &&
        isset($_GET['email'])
    ) {
        $GET = array(
            'password' => htmlentities($_GET['password']),
            'email' => htmlentities($_GET['email']),
            'name' => htmlentities($_GET['name']),
        );
    }
    if (
        isset($_POST['password'])
        && isset($_POST['name']) &&
        isset($_POST['email'])
    ) {
        $POST = array(
            'password' => htmlentities($_POST['password']),
            'email' => htmlentities($_POST['email']),
            'name' => htmlentities($_POST['name']),
        );
    }
    ?>
</body>

</html>