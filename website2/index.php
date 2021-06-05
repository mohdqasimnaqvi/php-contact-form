<?php require './server-info.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server Superglobal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css " />
    <link rel="stylesheet" href="../style2.css">
</head>

<body>
    <header>
        <h1>PHP Server Superglobal</h1>
    </header>
    <div class="container vertical-center" style="margin: auto;">
        <h1>Server & File Info</h1>
        <?php
            echo '<ul class="list-group">';
            foreach($SERVER as $key => $value){
                echo "<li class='list-group-item'><strong>$key</strong>: $value</li>";
            }
            echo '</ul>'
        ?>
    </div>
    <div class="container vertical-center" style="margin: auto;">
        <h1>Client Info</h1>
        <?php
            echo '<ul class="list-group">';
            foreach($CLIENT as $key => $value){
                echo "<li class='list-group-item'><strong>$key</strong>: $value</li>";
            }
            echo '</ul>'
        ?>
    </div>
    <footer>
        &copy; Apache Friends <a href="http://www.apache.org">See Privacy</a>
    </footer>
</body>

</html>