

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Moderna Bootstrap Template</title>
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
        <h1 class="text-light"><a href="index.html"><span>Diop&Frere</span></a></h1>
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
  </header>End Header

  <main id="main">

    <!-- ======= Blog Section ======= -->
  
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">   
            <article class="entry">
              <div class="entry-img">
                <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid" style="border-radius: 30%;border-bottom-right-radius:30%;">
              </div>
            
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>
          </div><!-- End blog entries list -->
          <div class="col-lg-4">
            <div class="sidebar">

            <?php
if(isset($_REQUEST['enregistrer'])){
$nomProduit=$_POST['nomProduit'];
 $prixProduit=$_REQUEST['prixProduit'];
$date_enregistrement=$_POST['date_enregistrement'];
$message1=$_POST['message1'];
$quantite=$_POST['quantite'];
$user='root';
$pass='';

}
try{
    $conne= new PDO('mysql:host=localhost;dbname=magasin',$user,$pass);
    $conne->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
  $requete= "INSERT INTO produit (nomProduit,prixProduit,date_enregistrement,message1,quantite) 
    values ('$nomProduit','$prixProduit','$date_enregistrement','$message1','$quantite')";
   
        $conne->exec($requete);
        echo '<p style="color:green">enregistrement reussit avec succees !</p>';
    

}catch(PDOException $e){
    echo $requete."<br>". $e->getMessage();

}$conne=null;

?>


              </div><!-- End sidebar search formn-->
              <button class="bg-primary text-light ml-auto"><a href="index.php">Retourner vers L'accueil </a></button>
              <div class="sidebar-item categories">
               
              </div><!-- End sidebar categories-->

             
              </div><!-- End sidebar recent posts-->

              
        </div>
      </div>
    </section><!-- End Blog Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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