<?php 
    require('./inc/boiler.php');
    require('./inc/nav.php');
    $id = mysqli_real_escape_string($mysqli_connect,$_REQUEST['id']);
    $q = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($mysqli_connect, $q);
    $post = mysqli_fetch_assoc($result);
    if(isset($_POST['delete'])){
        $delete_id = mysqli_real_escape_string($mysqli_connect,$_POST['delete_id']);

        $query = "DELETE FROM posts WHERE id=$delete_id";

        if(mysqli_query($mysqli_connect, $query)){
            header('Location: ' . root_url);
        }
        else {
            echo mysqli_error($mysqli_connect);
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
    <style>
        h1{
            text-transform: uppercase;
        }
        * {
            margin: 0;
        }
        p{
            margin: 0 !important;
            margin-bottom: 10px !important;
        }
        .d-flex * + *{
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <h1><?php echo $post['title']?></h1>
        <p><?php echo $post['body'] ?></p>
        <small>Created at: <?php echo $post['created_at']?> By: <?php echo $post['author']?></small>
        <br>
        <br>
        <div class="d-flex">
            <a href="<?php echo root_url?>" class="btn btn-info">Back</a>
            <a href="<?php echo root_url . "edit-post.php?id=" . $post['id']?>" class="btn btn-info">Edit Post</a>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <input type="hidden" name="delete_id" value="<?php echo $post['id'] ?>">
                <button role="button" type="submit" name="delete" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    <?php require "./inc/end-file.php" ?>
</body>
</html>