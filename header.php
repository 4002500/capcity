<?php if($_SERVER['PHP_SELF'] == "/ccot/header.php") {header("Location: index.php");} ?>
<?php $home_link = false; if($_SERVER['PHP_SELF'] != "/ccot/index.php") { $home_link = true; }  ?>

<?php $company_name = "CapCity Office Technitions" ?>
<?php $email = "contact@capcityofficetechnitions.com" ?>
<?php $phone = "6136081121" ?>
<?php $phone_formated = "(613) 608 1121" ?>
<?php $address = "22, Lorem ipsum dolor, consectetur adipiscing" ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $company_name ?></title>

  <!-- Font Awesome Icons -->
  <link href="utils/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>


  <!-- Plugin CSS -->
  <link href="utils/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light  fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php"><?php //echo $company_name ?><img width="100px" src="img/logo.png" alt=""></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
        <?php if($home_link) { ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
        <?php } ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php if ($home_link){echo("index.php");} ?>#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php if ($home_link){echo("index.php");} ?>#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#modal" href="">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>