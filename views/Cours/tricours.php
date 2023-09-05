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


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/product/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:35 GMT -->
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Esprit</title>
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
      <a class="pl-0 ml-0 text-center" href="../../front/index.html"> <img src="../assets/img/dashboard/logooo.jpg" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="../../front/index.html">Esprit</a> </li>


        </ul>
      </li>



      <!-- gestion des Cours -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#cours-page" aria-expanded="false" aria-controls="cours-page">
          <span><i class='fas fa-book-open' style='font-size:24px'></i>Gestion Des Cours</span>
        </a>
        <ul id="Cours-page" class="collapse" aria-labelledby="Cours-page" data-parent="#side-nav-accordion">
          <li> <a href="cours.html">Ajouter Une Cours</a>
          <li> <a href="affichercours.php"> Afficher les Cours</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des Cours -->

      <!-- gestion des livreurs -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livreur-page" aria-expanded="false" aria-controls="Livreur-page">
          <span><i class="fa fa-question" style='font-size:24px'></i>Gestion Des Quiz</span>
        </a>
        <ul id="Livreur-page" class="collapse" aria-labelledby="Livreur-page" data-parent="#side-nav-accordion">
          <li> <a href="../Quiz/quiz.html">Ajouter Un Quiz</a> </li>
          <li> <a href="../Quiz/afficherquiz.php"> Afficher les Quiz</a> </li>
         
        </ul>
      </li>
    
     
      
      </ul>


</aside>


<!-- Main Content -->
<main class="body-content">
<form action="ajoutquiz.php" method="post">
  <!-- Navigation Bar -->
  <nav class="navbar ms-navbar">

    <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
      <span class="ms-toggler-bar bg-primary"></span>
      <span class="ms-toggler-bar bg-primary"></span>
      <span class="ms-toggler-bar bg-primary"></span>
    </div>

    <div class="logo-sn logo-sm ms-d-block-sm">
      <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../index.html"><img src="../assets/img/dashboard/greendash-logo-84x41.png" alt="logo"> </a>
    </div>

    <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
  
      

      
      <li class="ms-nav-item ms-nav-user dropdown">
        <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="../assets/img/dashboard/rakhan-potik-1.jpg" alt="people"> </a>
        <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
          <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Anny Farisha</span></h6>
          </li>
          <li class="dropdown-divider"></li>
          <li class="ms-dropdown-list">
            <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
            <a class="media fs-14 p-2" href="../apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
            <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
          </li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-menu-footer">
            <a class="media fs-14 p-2" href="../prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
          </li>
          <li class="dropdown-menu-footer">
            <a class="media fs-14 p-2" href="../prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
      <span class="ms-toggler-bar bg-primary"></span>
      <span class="ms-toggler-bar bg-primary"></span>
      <span class="ms-toggler-bar bg-primary"></span>
    </div>

  </nav>
  <!-- body wrapper -->


<!-- MODALS -->

<!-- Reminder Modal -->
<div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-secondary">
        <h5 class="modal-title has-icon text-white"> New Reminder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="ms-form-group">
            <label>Remind me about</label>
            <textarea class="form-control" name="reminder"></textarea>
          </div>

          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Repeat Daily</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="ms-form-group">
                <input type="text" class="form-control datepicker" name="reminder-date" value="" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="ms-form-group">
                <select class="form-control" name="reminder-time">
                  <option value="">12:00 pm</option>
                  <option value="">1:00 pm</option>
                  <option value="">2:00 pm</option>
                  <option value="">3:00 pm</option>
                  <option value="">4:00 pm</option>
                </select>
              </div>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- Notes Modal -->
<div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-secondary">
        <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="ms-form-group">
            <label>Note Title</label>
            <input type="text" class="form-control" name="note-title" value="">
          </div>

          <div class="ms-form-group">
            <label>Note Description</label>
            <textarea class="form-control" name="note-description"></textarea>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
        </div>

      </form>

    </div>
  </div>
</div>



<?php
    
    // appeler la fonction list pour selectionner les donnees du table participant avec tri
    $type_tri = $_GET['typetri'];
    switch ($type_tri) {
      case 'title':
        $listecours = $coursC->trititle();
        break;
        case 'description':
          $listecours = $coursC->tridescription();
          break;
        case 'date':
            $listecours = $coursC->tridate();
            break;

 
    }
    ?>



        <div class="col-xl-6 col-md-12"  >
          <div class="ms-panel ms-panel-fh" style="width:900px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >
              


  <form action="tricours.php" method="GET" class="form-inline">
                <select class="btn btn-dark btn btn-pill custom-select my-1 mr-sm-2" style="margin-left: 750px;" name="typetri" onchange="this.form.submit()">
                    <option value="trie" selected>trier par:</option>  
                    <option value="title">title</option> 
                    <option value="description">description</option>      
                    <option value="date">date</option>
                </select>
            </form>

                <div class="form-row">
                  <div class="col-xxl-7 col-md-12 ">
                          <h4>Liste des Cours</h4><br>
  <form action="" method="post">
			<input class="input" type="text" name="title" value="<?=$title?>" placeholder="Recherche par titre" />
			
			
			<button type="submit" style="min-width: 10px" class="btn btn-dark btn btn-pill" >  <i class="flaticon-search" > </i></button>
		</form>

<table class="table table-bordered">
			
			<thead>
			<tr>
                <th scope="col">Idcours</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">date</th>
                

				
            </tr>
             </thead>

               


                          
<?PHP
foreach($listecours as $row){
  ?>
  <tr>
  <td><?PHP echo $row['Idcours']; ?></td>
  <td><?PHP echo $row['title']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
  <td><form method="POST" action="supprimercours.php">
<button type="submit" style="min-width: 10px" class="btn btn-primary "  >  <i class="fa fa-trash" > </i></button>
  <input type="hidden" value="<?PHP echo $row['Idcours']; ?>" name="Idcours">
   </form>
  </td>
 <td><form method="POST" action="impression.php">
<button type="submit" style="min-width: 10px" class="btn btn-primary " style="width:130px" >  <i class="flaticon-excel" > </i></button>
  <input type="hidden" value="<?PHP echo $row['Idcours']; ?>" name="Idcours">
   </form>
  </td>
  <td><a href="modifiercours.php?Idcours=<?PHP echo $row['Idcours']; ?>">
<button type="submit" style="min-width: 10px" class="btn btn-primary"  name="modifier"  ><i class="flaticon-pencil"> </i></button></td>
  </tr>
  <?PHP
}
?>

</tbody>
</table>
     <td>
           <form method="POST" action="statistique.php">
<button type="submit" style="min-width: 10px" class="btn btn-dark btn btn-pill" style="width:130px" >  <i class="flaticon-statistics" > </i></button>
   </form>  </td>   
            
             </div>
         
                  </div>
                </div>
              
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


<!-- Mirrored from slIdcoursesigma.com/themes/html/greendash/pages/product/product-grIdcours.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:48 GMT -->
</html>