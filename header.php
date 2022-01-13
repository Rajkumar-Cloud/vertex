<?php
if(!isset($title)){ $title = "Vertex"; }
if(!isset($description)){ $description = "Vertex - Good Network Solutions and agency, business, corporate, creative"; }
if(!isset($keywords)){ $keywords = "Vertex - Good Network Solutions"; }
$file_url = basename ($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- Required meta tags -->   
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />   
    <title><?= $title;?></title>
    <meta name="description" content="<?= $description;?>" />
    <meta name="keywords" content="<?= $keywords;?>" />
    <meta property="og:title" content="<?= $title;?>">
    <meta property="og:description" content="<?= $description;?>">

    <!-- Font Google -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"></noscript>

    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <link rel="preload" href="assets/img/circle-dotted.png" as="image" />

    <!-- custom styles (optional) -->
    <link href="assets/css/plugins.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">

</head>


<body class="v-dark dsn-effect-scroll dsn-cursor-effect dsn-ajax">



    <!-- ========== Loading Page ========== -->
    <div class="preloader">
        <span class="percent ">0</span>
        <span class="loading-text text-uppercase">Loading ...</span>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>

        <h1 class="title v-middle">
            <span class="text-strok">Vertex</span>
            <span class="text-fill">Vertex</span>
        </h1>
    </div>
    <!-- ========== End Loading Page ========== -->
