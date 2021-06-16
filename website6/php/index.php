<link rel="stylesheet" href="../../style.css">
<?php
    $file2 = '../test/file2.html';
    $path = '../demo/inc/footer.php';
    $hello = isset($_COOKIE['hello']) ? !$_COOKIE['hello'] : true;
    setcookie('hello', $hello, time()  + (3600 * 24 * 365 * 10));
    if($hello){
        mkdir('../testing123');
    }
    else {
        rmdir('../testing123');
    }
    // copy('../test/file1.txt', '../test/file2.txt')
    // rename('../test/file2.txt', '../test/file2.html')
    // file_put_contents('../test/file1.txt', file_get_contents('../test/file2.html'))
    $handle = fopen($file2, 'r');
    $data = fread($handle, filesize($file2));
    echo $data;
?>