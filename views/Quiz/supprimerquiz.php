<?PHP
include "../../controller/quizC.php";
$quizC=new QuizC();
if (isset($_POST["Idquiz"])){
    $quizC->supprimerQuiz($_POST["Idquiz"]);
    header('Location: afficherquiz.php');
}

?>