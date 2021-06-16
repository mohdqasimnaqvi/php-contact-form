<?php 
    require('./inc/boiler.php');
    require('./inc/nav.php');
    $q = 'SELECT * FROM posts';
    $result = mysqli_query($mysqli_connect, $q);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" class="link" href="https://bootswatch.com/5/<?php echo $theme?>/bootstrap.min.css">
    <style>
        body {
            --white: 255;
        }
        .well{
            background-color: rgba(var(--white), var(--white), var(--white), 0.1);
            padding: 30px;
            border-radius: 10px;
        }
        .well + .well{
            margin-top: 40px;
        }
        h3{
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <?php foreach ($posts as $post) { ?>
            <div class="well">
                <h3><?php echo $post['title']?></h3>
                <p><?php echo substr($post['body'], 0, 100) ?></p>
                <small>Created at: <?php echo $post['created_at']?> By: <?php echo $post['author']?></small>
                <br>
                <br>
                <a href="./posts.php?id=<?php echo $post['id'] ?>" class="btn btn-info">Read more</a>
            </div>
        <?php } ?>
    </div>
    <script>
        const link = Array.from(document.getElementsByClassName('link'))[0];
        if(link.getAttribute('href').includes('flatly')){
            document.body.style.cssText = `
                --white: 0;
            `
        }
    </script>
    <?php require "./inc/end-file.php" ?>
</body>
</html>