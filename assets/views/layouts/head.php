<?php

define('HOTELSCANNER_FOLDER', 'HotelScanner');

    define('HOTELSCANNER_HOST', 'http://'.$_SERVER["HTTP_HOST"]);
    define('HOTELSCANNER_URL', 'http://'.$_SERVER["HTTP_HOST"].'/Landing_Pages'.'/'.HOTELSCANNER_FOLDER);
    define('HOTELSCANNER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/'.HOTELSCANNER_FOLDER);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel scanner</title>
    <link rel="shortcut icon" href="<?php echo HOTELSCANNER_URL; ?>/assets/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo HOTELSCANNER_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo HOTELSCANNER_URL; ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo HOTELSCANNER_URL; ?>/assets/css/font-awesome.min.css">
</head>