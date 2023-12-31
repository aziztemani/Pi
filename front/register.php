<?php
    include "../config.php";
    require_once '../model/user.php';
    require_once '../controller/userC.php';

    if(isset($_POST['submit'])){
        $user = new user($_POST["id"],$_POST["prenom"],$_POST["nom"],$_POST["email"],$_POST["tel"],$_POST["naiss"],$_POST["classe"],$_POST["sexe"],$_POST["role"],$_POST["mdp"]);
        $userC = new userC();
        
        $b=$userC->ajouterUser($user);
        
    }
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.html"><span>E</span>T<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">

                <ul>
                    <li><a class="nav-link scrollto " active href="index.html">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="register.php">Inscription</a></li>
                    <li><a class="nav-link scrollto" href="profil.php">Connexion</a></li>
                    <li><a class="nav-link scrollto" href="cours/cours.php">Cours</a></li>
                    <li><a class="nav-link scrollto" href="cours/afficherQuiz.php">Quiz</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->



        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1><span>Esp</span>rit<span>.</span></h1>
                    <h2>Se former autrement</h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="bx bx-library"></i>
                        <h3><a href="cours/afficherQuiz.php">Quiz</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="bx bx-brain"></i>
                        <h3><a href="cours/cours.php">Cours</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="bx bx-message-rounded-detail"></i>
                        <h3><a href="">Actualités</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3><a href="">Evènements</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="bx bx-book"></i>
                        <h3><a href="">Livres</a></h3>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Hero -->

  

    <!-- ======= Creer compte Section ======= -->

    <section id="Create" class="Create">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sign up</h2>
          <p>create account</p>
          <br>
        </div>
        <div class="col-lg-8 mt-5 mt-lg-0">
          <form action="" method="post" >
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Nom: </td>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="nom" class="form-control" id="nom" placeholder="maximum 30 caractères" maxlength="30" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td>  Votre Prénom: </td>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="maximum 30 caractères" maxlength="30" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Adresse Email: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Prénom.Nom@esprit.tn" pattern=".+@esprit.tn" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Identifiant: </td>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="id" class="form-control" id="id" placeholder="xxxlllxxxx" maxlength="10"required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre numéro de téléphone: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" id="tel" name="tel" placeholder="xx xxx xxx"  minlength="8" maxlength="8" required />
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Date de Naissance: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="date" class="form-control" name="naiss" id="naiss"  min="1990-01-01" required>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Classe: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">

                <select class="form-control" name="classe" id="classe">
                  <option value="1">1 Année</option>
                  <option value="2">2 Année</option>
                  <option value="3">3 Année</option>
                  <option value="4">4 Année </option>
                  <option value="5">5 Année</option>

                </select>

              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Sexe: </td>
              </div>
              <div class="col-md-6 form-group">
                <select class="form-control" name="sexe" id="sexe">
                  <option value="femme">Femme</option>
                  <option value="homme">Homme</option>
                    </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Role: </td>
              </div>
              <div class="col-md-6 form-group">
                <select class="form-control" name="role" id="role">
                  <option value="enseignant">Enseignant</option>
                  <option value="etudiant">Etudiant</option>
                  <option value="administrateur">Administrateur</option>
                    </select>
              </div>
  </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Mot de Passe: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="password" class="form-control" name="mdp" id="mdp"  required>
              </div>
            </div>
            <br>


            <div class="text-center"><button class="btn btn-danger" name="submit"  type="submit"> Créer Compte </button></div>
            <br>
          </form>


        </div>
    </section>
    <!--end connexion section-->

























  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Gp<span>.</span></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>