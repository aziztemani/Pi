<?PHP
include "../../model/quiz.php";
include "../../controller/quizC.php";

if (isset($_GET['Idquiz']) and isset($_GET['Idcours']) and isset($_GET['title']) and isset($_GET['question_count']) and isset($_GET['duration'])){
$Idquiz=$_GET['Idquiz'];
$Idcours=$_GET['Idcours'];
$title=$_GET['title'];
$question_count=$_GET['question_count'];
$duration=$_GET['duration'];
if( $Idquiz!= "" && $Idcours!= "" && $title!= "" && $question_count!= "" && $duration!= "")
{ // si les saisies ne sont pas vides

if(( is_numeric($Idcours)) && (is_numeric($Idquiz))  ){
$quiz1=new quiz($_GET['Idquiz'],$_GET['Idcours'], $_GET['title'],$_GET['question_count'],$_GET['duration']);
$quiz1C=new quizC();
$quiz1C->ajouterQuiz($quiz1);
header('Location: afficherquiz.php');  
}

}else {echo" les champs sont vides";}
} 
else{
  echo "verifier les champs";
}



?>