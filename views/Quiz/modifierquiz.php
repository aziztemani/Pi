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


     <!-- gestion des livraisons -->
     <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livraison-page" aria-expanded="false" aria-controls="Livraison-page">
          <span><i class='fas fa-truck' style='font-size:18px;color:white'></i>Gestion Des Cours</span>
        </a>
        <ul id="Livraison-page" class="collapse" aria-labelledby="Livraison-page" data-parent="#side-nav-accordion">
          <li> <a href="../cours/ajoutcours.php">Ajouter Un Cour</a> </li>
          <li> <a href="../cours/affichercours.php"> Afficher les Cours</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des livraisons -->

      <!-- gestion des Quiz -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#quiz-page" aria-expanded="false" aria-controls="quiz-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des Quiz</span>
        </a>
        <ul id="quiz-page" class="collapse" aria-labelledby="quiz-page" data-parent="#side-nav-accordion">
          <li> <a href="../Quiz/ajoutquiz.php">Ajouter Un Quiz</a> </li>
          <li> <a href="../Quiz/afficherquiz.php"> Afficher les Quiz</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des livreurs -->

   
      
      
      
     
    </ul>


  </aside>


  <!-- Main Content -->
  <main class="body-content">
<form action="modifierquiz.php" method="post">

 


   <?php
include "../../controller/quizC.php";
include "../../model/quiz.php";

if (isset($_GET['Idquiz'])){
    $quizC=new quizC();
      $result=$quizC->recupererQuiz($_GET['Idquiz']);
    foreach($result as $row){
      $Idquiz=$row['Idquiz'];
      $Idcours=$row['Idcours'];
      $question=$row['question'];
      $reponse=$row['reponse'];

   
?>


   <div class="ms-content-wrapper"  >
      <div class="row">

      





        <div class="col-xl-6 col-md-12"  >
          <div class="ms-panel ms-panel-fh" style="width:900px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >
              <form method="POST"  class="needs-validation clearfix" novalidate="">
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                          <h5>modifier Quiz</h5><br>

               <label>Idquiz</label>
                  <div class="input-group">
                       <input type="number" name="Idquiz" class="form-control" id="Idquiz" placeholder="Entrer Idquiz"  value="<?PHP echo $Idquiz ?>">
                       <div class="invalid-feedback">
                       </div>
                     </div>
         

              <label>Idcours</label>
                <div class="input-group">
                  <input type="number" name="Idcours" class="form-control" id="Idcours" placeholder="Entrer Idcours" value="<?PHP echo $Idcours ?>">
                  <div class="invalid-feedback">
                  </div>
                </div>


                <label>question</label>
                  <div class="input-group">
                    <input type="text" name="question" class="form-control" id="question" placeholder="Entrer la question "value="<?PHP echo $question ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>


                  <label>reponse</label>
                  <div class="input-group">
                    <input type="text" name="reponse" class="form-control" id="reponse" placeholder="Entrer reponse "value="<?PHP echo $reponse ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>

             
                
              
            
             </div>

              <div class="col-md-12">
              <input type="submit" name="modifier" value="Modifier Quiz!">
              </div>
         
                  </div>
                </div>
              </form>
              <?PHP
  }

if (isset($_POST['modifier'])){
  $quiz = new quiz($_POST['Idquiz'],$_POST['Idcours'],$_POST['question'],$_POST['reponse']);
  $quizC->modifierQuiz($quiz,$_POST['Idquiz']);
echo'<script>location.replace("afficherquiz.php")</script>';  
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