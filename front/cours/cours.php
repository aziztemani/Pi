<?php
include "../../controller/coursC.php";
$coursC=new coursC();
$title ='';
if(isset($_POST['title'])){
   
	$title = $_POST['title'];
	$listecours=$coursC->AffichercoursFiltre($title);
	
}
else
$listecours=$coursC->affichercourss();
?>

<!DOCTYPE html>
<html lang="en">


                    

<head>
    <meta charset="utf-8">
    <title>Esprit </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Esprit" name="keywords">
    <meta content="Esprit" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo">
                            <a href="../index.html">
                                <h1>Esprit</h1>
                                <!-- <img src="../img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="top-bar-right">
                            <div class="text">
                                <h2>8:00 - 20:00</h2>
                                <p>de lundi a vendredi </p>
                            </div>
                            <div class="text">
                                <h2>+216 70 250 000</h2>
                                <p>Appelez-nous pour plus d'infos</p>
                            </div>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                        
                        <a href="../cours/afficherQuiz.php" class="nav-item nav-link">Quiz</a>
                        <a href="cours.php" class="nav-item nav-link">Cours</a>
                        <a href="../register.php" class="nav-item nav-link">Inscription</a>
                        <a href="../connexion.php" class="nav-item nav-link">Connexion</a>




                    </div>
                        

                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Notre Cours</h2>
                    </div>
                    <div class="col-12">
                        <a href="../index.html">Accueil</a>
                        <a href="">Notre Cours</a>
                    </div>
                </div>
            </div>
        </div>





        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header">
                    <h2>Nos Cours</h2>
                </div>
       


            </div>
        </div>




   <!-- Blog Start -->
<div class="blog">
    <div class="container">
       

        <div class="row blog-page">

            <?PHP
            $coursC = new coursC();
            $listecours = $coursC->affichercourss();
            foreach($listecours as $user){

                ?>
                <div class="col-lg-4 col-md-6 blog-item">
                    <img src="../img/cour.jfif" alt="Blog">

                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Titre : <?PHP echo $user['title']; ?></a><br>
                        <i class="fa fa-calendar-alt"></i>
                        <a href="">Description : <?PHP echo $user['description']; ?></a><br>
                        <br>
                    </div>


                </div>
                <?PHP
            }
            ?>
        </div>

    </div>
</div>
    <!-- Blog End -->





    <!-- Page Header End -->








    <!-- Blog End -->


    <!-- Newsletter Start -->
    <div class="newsletter">
        <div class="container">
            <div class="section-header">
                <h2>Inscrivez-vous a nos communications!</h2>
            </div>
            <div class="form">
                <input class="form-control" placeholder="Entrez votre adresse e_mail">
                <button class="btn">inscrire</button>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-about">
                        <h2>A propos</h2>
                     
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">


                            </div>
                        </div>
                      
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>contactez nous</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Adresse. 1, 2 rue André Ampère - 2083 - Pôle Technologique - El Ghazala.</p>
                                <p><i class="fa fa-phone-alt"></i>+216 70 250 000</p>
                                <p><i class="fa fa-envelope"></i>contact@esprit.tn</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-menu">
            <div class="f-menu">
                <a href="">conditions d'utilisation</a>
                <a href="">politique de confidentialiter</a>
                <a href="">Cookies</a>
                <a href="">Aide</a>
                <a href="">FQAs</a>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>




    <!--            xttttttt          -->

    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>








    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>