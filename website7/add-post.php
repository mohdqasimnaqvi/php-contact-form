    <?php 
        require('./inc/boiler.php');
        require('./inc/nav.php');

        //1. Check for submit
        //2. See if There is any content in the inputs
        //3. Add Stuff to the database
        if(isset($_POST['submit'])){
            $title = htmlentities(mysqli_real_escape_string($mysqli_connect, $_POST['title']));
            $body = htmlentities(mysqli_real_escape_string($mysqli_connect, $_POST['body']));
            $author = htmlentities(mysqli_real_escape_string($mysqli_connect, $_POST['author']));
            $query = "INSERT INTO posts (title, body, author) VALUES ('$title', '$body', '$author')";
    
            if(!mysqli_query($mysqli_connect, $query)){
                echo 'Error: '.  mysqli_error($mysqli_connect);
            }
            else {
                header("Location: ". root_url);
            }
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/<?php echo $theme?>/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px; width: 700px;">
        <h1>Add File</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control"/>
            </div>
            <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" class="form-control"></textarea>
            </div>
            <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control"/>
            </div>
            <br>
            <br>
            <button name="submit" class="btn btn-info">Submit</button>

        </form>
    </div>
    <?php require "./inc/end-file.php" ?>
</body>
</html>