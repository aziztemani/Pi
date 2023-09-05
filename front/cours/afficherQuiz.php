<?php
include "../../controller/quizC.php";


include"../header.php";



?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Quiz</h2>
            </div>
            <div class="col-12">
                <a href="../index.html">Home</a>
                <a href="">Our Quiz</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


   <!-- Blog Start -->
   <div class="blog">
    <div class="container">
       

        <div class="row blog-page">

            <?PHP
            $quizC=new quizC();
            $listequiz = $quizC->afficherquizs();
            foreach($listequiz as $user){

                ?>
                <div class="col-lg-4 col-md-6 blog-item">
                    <img src="../img/quiz.avif" alt="Blog">

                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Titre : <?PHP echo $user['title']; ?></a><br>
                        <i class="fa fa-calendar-alt"></i>
                        <a href="">Nombre de questions : <?PHP echo $user['question_count']; ?></a><br>
                        <i class="fa fa-calendar-alt"></i>
                        <a href="">Durée : <?PHP echo $user['duration']; ?></a><br>
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

<?php include"../footer.php"; ?>








