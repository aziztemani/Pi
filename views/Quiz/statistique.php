<!DOCTYPE html>
<html lang="en">





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

   

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
  
    
     <!-- gestion des livraisons -->
     <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livraison-page" aria-expanded="false" aria-controls="Livraison-page">
                    <span><i class='fas fa-truck' style='font-size:18px;color:white'></i>Gestion Des Cours</span>
                </a>
                <ul id="Livraison-page" class="collapse" aria-labelledby="Livraison-page" data-parent="#side-nav-accordion">
                    <li> <a href="../Cours/cours.html">Ajouter Un Cours</a> </li>

                    <li> <a href="../Cours/affichercours.php"> Afficher les Cours</a> </li>

                </ul>
            </li>
            <!-- /gestion des livraisons -->

            <!-- gestion des Quiz -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livreur-page" aria-expanded="false" aria-controls="Livreur-page">
                    <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des Quiz</span>
                </a>
                <ul id="Livreur-page" class="collapse" aria-labelledby="Livreur-page" data-parent="#side-nav-accordion">
                    <li> <a href="quiz.html">Ajouter Un Quiz</a> </li>
                    <li> <a href="afficherquiz.php"> Afficher les Quiz</a> </li>

                </ul>
            </li>


     

      
      
      
      
      
      
     
    </ul>


  </aside>


  <!-- Main Content -->
  <main class="body-content">

    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>



      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

    </nav>
    <!-- body wrapper -->
    <?php
include "../../config.php";
$db=config::getConnexion();

  //shipping stats...
  $req3= $db->query("SELECT title as title,question_count as question_count from quiz group by title");
  $req3->execute();
  $liste3= $req3->fetchALL(PDO::FETCH_OBJ);

$dataPoints3 = array();

foreach ($liste3 as $row) {
   $dataPoints3[] = array('label' => $row->title,'y'=> $row->question_count);
}
?>

 <script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title: {
    text: "Le titre du quiz selon le Nbr de question"
  },
  data: [{
    type: "pie",
    startAngle: 240,
    yValueFormatString: "##0\"\"",
    indexLabel: "Adresse:{label} question_count:{y}dt",
    dataPoints:<?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
  
    
  }]
});
chart.render();
function explodePie (e) {
  if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
    e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
  } else {
    e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
  }
  e.chart.render();

}
}
</script>
 <div id="chartContainer" style="height: 550px; width: 100%;"></div>
 <script src="canvasjs-2.3.2/canvasjs.min.js"></script> 


  
 
  

  </main>




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










































