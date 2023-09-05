<?php
include "../controller/coursC.php";
$coursC = new coursC();
$listecours = $coursC->affichercourss();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Esprit </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Anim shop" name="keywords">
    <meta content="Anim shop" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

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
                            <a href="index.html">
                                <h1>Anim shop</h1>
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
                                <h2>+216 456 7890</h2>
                                <p>Appelez-nous pour plus d'infos</p>
                            </div>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
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
                            <div class="navbar-nav mr-auto">
                        <a href="../cours/afficherCours.php" class="nav-item nav-link">Cours</a>
                        <a href="../cours/afficherQuiz.php" class="nav-item nav-link">Quiz</a>
<a href="article.php" class="nav-item nav-link">Blog</a>



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
                        <h2>Notre Blog</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Accueil</a>
                        <a href="">Notre Blog</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header">
                    <h2>liste des commentaires</h2>
                </div>



            </div>
        </div>









        <!--            xttttttt          -->










        <div class="col-xl-6 col-md-12">
            <div class="ms-panel ms-panel-fh" style="width:900px ; margin-left: 120px;">
                <div class="ms-panel-body">


                   




                    <div class="form-row">
                        <div class="col-xxl-7 col-md-12 ">



                        <?PHP
foreach($listecours as $row){
  ?>
  <tr>
  <td><?PHP echo $row['Idcours']; ?></td>
  <td><?PHP echo $row['title']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
  <td><form method="POST" action="supprimercours.php">
  <input type="hidden" value="<?PHP echo $row['Idcours']; ?>" name="Idcours">
<button type="submit" style="min-width: 10px" class="btn btn-primary "  >  <i class="fa fa-trash" > </i></button>
   </form>
  </td>
 <td><form method="POST" action="impression.php">
  <input type="hidden" value="<?PHP echo $row['Idcours']; ?>" name="Idcours">
<button type="submit" style="min-width: 10px" class="btn btn-primary " style="width:130px" >  <i class="flaticon-excel" > </i></button>
   </form>
  </td>
  <td><a href="modifiercours.php?Idcours=<?PHP echo $row['Idcours']; ?>">
<button type="submit" style="min-width: 10px" class="btn btn-primary"  name="modifier"  ><i class="flaticon-pencil"> </i></button>
</td>

  </tr>
  <?PHP
}
?>
                            
                            ?>









                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>


    <!--            xttttttt          -->















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
                        <p>
                            Nous voulons faciliter l achat des produits necessaires pour vos animaux avec une livraison rapide et assurer.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">


                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Pages utiles</h2>
                                <a href="">Commandes</a>
                                <a href="">Produits</a>
                                <a href="">Livraison</a>
                                <a href="">Utilisateurs</a>
                                <a href="">Offres</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>contactez nous</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 residence,ennaser2,ariena</p>
                                <p><i class="fa fa-phone-alt"></i>+216 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info_animshop@hotmail.com</p>
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