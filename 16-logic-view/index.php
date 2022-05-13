<?php
    require('app/app.php');

    //php-16
    $title = 'Hello World';
    // view('index', $title);

    //php-17
    $data = get_data();

    view('index', $data);

?>