<?php 
    //todo: SERVER - SUPERGLOBAL
    //INFO: 1. Create Server Array
    $SERVER = array(
        'Host Name' => $_SERVER['SERVER_NAME'],
        'HTTP Host' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute URL' => $_SERVER['SCRIPT_FILENAME']
    );
    // // echo $SERVER['Absolute URL'];
    //INFO: 2. Create Client Array
    $CLIENT = array(
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
        'My IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT'],
    );

    // echo $CLIENT['Remote Port'];
?>