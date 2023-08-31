<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/product/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:35 GMT -->
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Anim shop   Animalerie</title>
  <!-- Iconic Fonts -->
  <link href="../vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../vendors/iconic-fonts/flat-icons/flaticon.css">
  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="../assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Greendash styles -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon.ico">

</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ">



  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

  <!-- Sidebar Navigation Left -->
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="../index.html"> <img src="../assets/img/dashboard/logoo.png" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="../index.html">Anim Shop</a> </li>


        </ul>
      </li>
    
      <!-- gestion des Cours -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Cours-page" aria-expanded="false" aria-controls="Cours-page">
          <span><i class='fas fa-truck' style='font-size:18px;color:white'></i>Gestion Des Cours</span>
        </a>
        <ul id="Cours-page" class="collapse" aria-labelledby="Cours-page" data-parent="#side-nav-accordion">
          <li> <a href="../cours/cours.html">Ajouter Une Cours</a></li>
        	
          <li> <a href="../cours/affichercours.php"> Afficher les Cours</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des Cours -->

      <!-- gestion des livreurs -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livreur-page" aria-expanded="false" aria-controls="Livreur-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des Quiz</span>
        </a>
        <ul id="Livreur-page" class="collapse" aria-labelledby="Livreur-page" data-parent="#side-nav-accordion">
          <li> <a href="../Quiz/ajoutquiz.php">Ajouter Un Quiz</a> </li>
          <li> <a href="../Quiz/afficherquiz.php"> Afficher les Quiz</a> </li>
         
        </ul>
      </li>

     
    </ul>


  </aside>







   <!--            xttttttt          -->
   <?php
include "../../controller/coursC.php";
include "../../model/cours.php";

if (isset($_GET['Idcours'])){
    $coursC=new coursC();
      $result=$coursC->recupererCours($_GET['Idcours']);
    foreach($result as $row){
      $Idcours=$row['Idcours'];
      $date=$row['date'];
      $description=$row['description'];
	$title=$row['title'];
   
?>






        <div class="col-xl-6 col-md-12"  >
          <div class="ms-panel ms-panel-fh" style="width:900px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >
              <form method="POST"  class="needs-validation clearfix" novalidate="">
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                          <h5>modifier cours</h5><br>

               <label>Idcours</label>
                  <div class="input-group">
                       <input type="number" name="Idcours" class="form-control" id="Idcours" placeholder="Entrer l'Id cours"  value="<?PHP echo $Idcours ?>">
                       <div class="invalid-feedback">
                       </div>
                     </div>

                     <label>title</label>
                  <div class="input-group">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Entrer le titre "value="<?PHP echo $title ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>
         
                  <label>description</label>
                  <div class="input-group">
                    <input type="text" name="description" class="form-control" id="description" placeholder="Entrer la description "value="<?PHP echo $description ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>
                <label>date</label>
                  <div class="input-group">
                    <input type="text" name="date" class="form-control" id="date" placeholder="Entrer la date "value="<?PHP echo $date ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>


                  

               
                
              
            
             </div>

              <div class="col-md-12">
              <input type="submit" name="modifier" value="Modifier cours!">
              </div>
         
                  </div>
                </div>
              </form>
              <?PHP
  }

if (isset($_POST['modifier'])){
  $cours = new cours($_POST['Idcours'],$_POST['title'],$_POST['description'],$_POST['date']);
  $coursC->modifierCours($cours,$_POST['Idcours']);
echo'<script>location.replace("affichercours.php")</script>';  
}
}?>

            </div>
          </div>
        </div>
      </div>
    </div> 


   <!--            xttttttt          -->



  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="../assets/js/jquery-3.3.1.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/perfect-scrollbar.js"> </script>
  <script src="../assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Greendash core JavaScript -->
  <script src="../assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="../assets/js/settings.js"></script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/product/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:48 GMT -->
</html>

