<?php if($_SERVER['PHP_SELF'] == "/ccot/footer.php") {header("Location: index.php");} ?>
<?php $home_link = false; if($_SERVER['PHP_SELF'] != "/ccot/index.php") { $home_link = true; }  ?>


<div class="mt-5 pt-5 pb-5 footer custom_links">
<div class="container">
  <div class="row">

    <div class="col-lg-6 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Contact</h4>
      <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i><a href="tel:<?php echo $phone ?>"><?php echo $phone_formated ?></a></p>
      

      <p><i class="fa fa-envelope-o mr-3"></i><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
      <p><a href="facebook.com"><i class="fa fa-facebook fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="instagram.com"><i class="fa fa-instagram fa-2x"></i></a></p>

    </div>

    <div class="col-lg-6 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Site Map</h4>
        <div class="m-0 p-0">


          <div class="row">
          <?php if($home_link) { ?>
          <p class="col-lg-6 col-sm-6"><a href="index.php">Home</a></p>
          <?php } ?>
          <p class="col-lg-6 col-sm-6"><a href="index.php#about">About</a></p>
          <p class="col-lg-6 col-sm-6"><a href="index.php#services">Services</a></p>
          
          <p class="col-lg-6 col-sm-6"><a href="index.php#gallery">Gallery</a></p>
          <p class="col-lg-6 col-sm-6"><a data-toggle="modal" data-target="#modal" href="">Contact</a></p>
          </div>
        </div>
    </div>
  
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <center>
      <p class=""><small class="text-white-50">Copyright © <?php echo ($company_name) ?>  <?php echo(date("Y")); ?></small></p>
      </center>
    </div>
  </div>
</div>
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.js"></script>
  <script>


  </script>




<?php include("modal.php") ?>



</body>

</html>
