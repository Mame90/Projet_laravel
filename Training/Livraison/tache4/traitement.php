<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="style.css">
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html"><span style="background-color:#fff; color: black;">Vérificateur <br>de Moyenne</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Test</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->

        <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading style1">   
                        <?php
                if (isset($_REQUEST['soumettre']))
                $nomcomlet=$_POST["nomcomplet"];
                $moyenne=$_POST["moyenne"];
                if(isset($nomcomlet) && (isset($moyenne)));
                function traitement($moyenne){
                    if($moyenne >=0 and $moyenne<10){
                        $echec = 'Votre moyenne est:'."&nbsp;".$_POST['moyenne']."/20"."<br>".'Décision du jury: Echec'."<br>".'Pas de mension';
                        echo "Bonjour"."&nbsp;".$_POST['nomcomplet'];
                        echo '<h3>'.$echec;
                    }
                    else if($moyenne>10 && $moyenne<12){
                        $admis = 'Votre moyenne est:'."&nbsp;".$_POST['moyenne']."/20"."<br>".'Décision du jury: Admis'."<br>".'Mension Passable';
                        echo "Félicitation"."&nbsp;".$_POST['nomcomplet'];
                        echo '<h3>'.$admis;
                    }
                    else if($moyenne>=12 && $moyenne<14){
                        $admis = 'Votre moyenne est:'."&nbsp;".$_POST['moyenne']."/20"."<br>".'Décision du jury: Admis'."<br>".'Mension Assez Bien';
                       echo "Félicitation"."&nbsp;".$_POST['nomcomplet'];
                        echo '<h3>'.$admis;
                    }
                        else if($moyenne>14 && $moyenne<=16){
                            $admis = 'Votre moyenne est:'."&nbsp;".$_POST['moyenne']."/20"."<br>".'Décision du jury: Admis'."<br>".'Mension Bien';
                           echo "Félicitation"."&nbsp;".$_POST['nomcomplet'];
                            echo '<h3>'.$admis;
                }  
                else if($moyenne>16 && $moyenne<=18){
                    $admis = 'Votre moyenne est:'."&nbsp;".$_POST['moyenne']."/20"."<br>".'Décision du jury: Admis'."<br>".'Mension Trés Bien';
                   echo "Félicitation"."&nbsp;".$_POST['nomcomplet'];
                    echo '<h3>'.$admis;
        }
        else if($moyenne>18 && $moyenne<=20){
            $admis = 'Votre moyenne est:'."&nbsp;".$_POST['moyenne']."/20"."<br>".'Décision du jury: Admis'."<br>".'Mension Excelent avec etonnement du Jury!';
           echo "Félicitation"."&nbsp;".$_POST['nomcomplet'];
            echo '<h3>'.$admis;
     
} else{
  echo "Desole cher(e)s"."&nbsp;".$_POST['nomcomplet'].' veiller donner une moyenne compris entre'."<br>".'  0 et 20 svp!';
}

            }
                traitement($moyenne);
?>
                            
                    </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="small text-center fst-italic" style="font-size: 18px;color:black;font-weight:700">
                Copyright &copy; Mbaye Diop from Bakeli,Tout droit reserve.</div>
                <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
