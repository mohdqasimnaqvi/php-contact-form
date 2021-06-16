<?php 
        $mysqli_connect = mysqli_connect('localhost', 'root', '', 'phpblog');
        if(mysqli_connect_errno()){
            echo 'Oops something went wrong' . mysqli_connect_errno();
        }
        define('root_url', 'http://localhost/php-yes-php/website7/');
        $theme = 'darkly';
    ?>