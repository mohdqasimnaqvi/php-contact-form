<?php 
    require('./inc/boiler.php');
    require('./inc/nav.php');
    
    $id = htmlentities(mysqli_real_escape_string($mysqli_connect,$_GET['id']));
    if(isset($_POST['submit'])){
        $update_id = htmlentities(mysqli_real_escape_string($mysqli_connect,$_POST['id']));
        $title = htmlentities(mysqli_real_escape_string($mysqli_connect,$_POST['title']));
        $body = htmlentities(mysqli_real_escape_string($mysqli_connect,$_POST['body']));
        $author = htmlentities(mysqli_real_escape_string($mysqli_connect,$_POST['author']));

        $query = "UPDATE posts SET title='$title',author='$author',body='$body' WHERE id=$update_id";

        if(mysqli_query($mysqli_connect, $query)){
            header('Location: ' . root_url);
        }
        else {
            echo mysqli_error($mysqli_connect);
        }

    }

    
    $q = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($mysqli_connect, $q);
    $post = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/<?php echo $theme?>/bootstrap.min.css">
    <style>
        textarea {
            height: 50vh;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 30px; width: 700px;">
        <h1>Edit Post</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title']?>"/>
            </div>
            <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" class="form-control"><?php echo $post['body']?></textarea>
            </div>
            <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="<?php echo $post['author']?>"/>
            </div>
            <input type="hidden" name="id" value="<?php echo $post['id']?>">
            <br>
            <br>
            <button name="submit" class="btn btn-info">Submit</button>

        </form>
    </div>
    <?php require "./inc/end-file.php" ?>
</body>
</html>