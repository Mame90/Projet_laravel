<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>enregistrement</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Diop&Frére</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Acceuil</a></li>
          <!-- <li><a href="about.html">A propos</a></li> -->
          <!-- <li><a href="services.html">Services</a></li> -->
          <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
          <li><a href="contact.php">Enregistrement</a></li> 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Enregistrement des produits</h2>
          <ol>
            <li><a href="index.php">Acceuil</a></li>
            <li>Enregistrement Produit</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">
          <div class=" col col-md-5">
            <!-- <form action="traitement.php" method="post" role="form" class="php-email-form"> -->
              <form action="traitement.php" role="form" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="nomProduit">Nom Produit <span style="color: red;">*</span></label>
                  <input type="text" name="nomProduit" class="form-control" id="name" placeholder="Nom du produit" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="prix">Prix Produit <span style="color: red;">*</span></label>
                  <input type="number" name="prixProduit" class="form-control" id="prix" placeholder="Prix du produit" required>
                </div>
             
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="prix">Quantite <span style="color: red;">*</span></label>
                  <input type="number" name="quantite" class="form-control" id="prix" placeholder="Prix du produit" required>
                </div>
            
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="date_enregistrement">Date <span style="color: red;">*</span></label>
                <input type="date" class="form-control" name="date_enregistrement" id="date_enregistrement" placeholder="" required>
              </div>
         
              </div>
              <div class="form-group mt-3">
                <label for="message">Notifier le produit (Optionnel)</label>
                <textarea class="form-control" name="message1" rows="5" placeholder="Notification sur le produit" ></textarea>
              </div>
              </div>
              <div class="text-start py-2">
                 <button type="submit" name="enregistrer">Enregistrer !</button> 
                 <!-- <input type="submit" name="enregistrer" value="Enregistrer"> -->
                
              </div>
            </form>
          </div>

    
      </div>       

</div>
        

      
    </section><!-- End Contact Section -->

 
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
