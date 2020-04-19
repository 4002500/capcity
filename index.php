<?php include("header.php") ?>



  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <img src="img/logo.png" alt="">
          <br>
          <br>
          <h3 class="text-uppercase text-white font-weight-bold">Ottawa's Fastest Growing Office Technicians</h3>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <h4 class="text-white-75 font-weight-light mb-5">

            <a href="tel:<?php echo $phone ?>" class="phone_num"><i class="fas fa-phone mb-3"></i> <?php echo $phone_formated ?></a>
          </h4>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">
          CCOT is a professional contractor for various furniture dealerships and manufacture for the private and public sector clients. With over a combined experience 10 years, CCOT team can handle all challenges and can always find the best solution for our clients. Our purpose is to receive, deliver, and install new or existing furniture products throughout the city. Our experience in products includes: Teknion, Steelcase, Haworth, Herman Miller and much more.          </p>
          <a class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#modal" href="">Request a Free Estimate!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Commercial Office Services</h2>
      <hr class="divider my-4">
      <div class="row">
      <div class="col-lg-12 col-md-12 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-truck-moving text-primary mb-4"></i>
            <h3 class="h4 mb-2">Office Moving</h3>
            <p class="text-muted mb-0">CCOT team is fully experienced and qualified to relocate any office,  big or small. We provide the friendliest and most professional services to each and every client, minimizing stress on move day. We use the most effective equipment and tools along with padding furniture and content to ensure safety throughout the move.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-tools text-primary mb-4"></i>
            <h3 class="h4 mb-2">Office Furniture Installation</h3>
            <p class="text-muted mb-0">
            CCOT delivers and installs furniture products of all sorts. We use floor plans to ensure the client's specifications are installed accurately and accordingly. We always offer a full clean up once completely finished the install. This includes a full eco-friendly wipe down and removal of any garbage and packaging.
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-people-carry text-primary mb-4"></i>
            <h3 class="h4 mb-2">Reconfiguration of Space</h3>
            <p class="text-muted mb-0">CCOT uses the client’s existing product to configure and maximize the space needed for employees. We use floor plans and layouts to make the space fully functional and efficient for our clients.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-dumpster text-primary mb-4"></i>
            <h3 class="h4 mb-2">Decommission and Removal</h3>
            <p class="text-muted mb-0">CCOT team can deal with the removal of existing furniture and either locate a buyer or dispose of it in the most eco-friendly way, avoiding landfill. CCOT will use our contact to donate furniture pithing the city. CCOT will make sure your existing space is perfectly clean and empty.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-server text-primary mb-4"></i>
            <h3 class="h4 mb-2">I.T. Disconnect & Reconnect</h3>
            <p class="text-muted mb-0">CCOT is fully capable of relocating all of our client's technology including computers and all peripheral devices. We also have the experience to install monitor arms if needed. CCOT will come in and fully label and pack all technology that will be relocated. We use a sheet that easily allows us to identify existing ________ that will be moving to new spaces upon reconnection. Once completed CCOT makes sure all cables are hidden while phones and monitors are working.</p>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Get a Free Estimate Today!</h2>
      <a class="btn btn-light btn-xl" href="" data-toggle="modal" data-target="#modal">Request an Estimate</a>
    </div>
  </section>


  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Contact us today and one of our team members will reach out to you as soon as possible.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted" href="tel:<?php echo $phone ?>"></i>
          <a class="d-block" href="tel:<?php echo $phone ?>"><?php echo $phone_formated ?></a>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
        </div>
      </div>

    </div>
  </section>














<?php include("footer.php") ?>
