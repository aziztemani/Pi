<?php
include "../../controller/EventC.php";


include"../header.php";



 ?>
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Events</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Our Events</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header">
                <h2>Latest From Events</h2>
            </div>

            <div class="row blog-page">
<?PHP
$EventC=new EventC();
$listeUsers=$EventC->afficherEvents();
foreach($listeUsers as $user){

    ?>
                <div class="col-lg-4 col-md-6 blog-item">
                    <img src="../img/aa-1.jpg" alt="Blog">
                    <h3>nom:<?PHP echo $user['nom']; ?></h3>
                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">prix:<?PHP echo $user['duree']; ?></a><br>
                        <i class="fa fa-calendar-alt"></i>
                        <p>date:<?PHP echo $user['dateE']; ?></p>
                    </div>


                </div>
    <?PHP
}
?>
            </div>

        </div>
    </div>
    <!-- Blog End -->

<?php include"../footer.php"; ?>