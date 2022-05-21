<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex" />
    <meta name="robots" content="noimageindex" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php $pageName != "" ? $pageName : $pageName = "Angel Mavare Portfolio";   echo $pageName; ?> </title>
    <link rel="icon" href="assets/img/fav.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- <link href="assets/ionicons/css/ionicons.min.css" rel="stylesheet"> -->

    <!-- main css -->
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- modernizr -->
    <script src="assets/js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="/"><img src="assets/img/logo.png" width="200" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">MENU</li>

                <li class="page-home"><a href="index.php">Home</a> <!-- <i class="fa-solid fa-circle color"></i> --></li>
                <li class="page-about"><a href="about.php">About me</a></li>
                <li class="page-services"><a href="services.php">Services & Skills</a></li>
                <li class="page-portfolio"><a href="portfolio.php">Portfolio</a></li>
                <li class="page-contact"><a href="contact.php">Contact me</a></li>



                <li class="box-label">Follow me</li>
                <?php require('partials/social.php');?>

            </ul>
        </nav>
        <!-- end nav -->

        
    </div>