<?PHP
include "../../controller/coursC.php";
$coursC=new CoursC();
if (isset($_POST["Idcours"])){
    $coursC->supprimerCours($_POST["Idcours"]);
    header('Location: affichercours.php');
}

?>