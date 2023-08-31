<?PHP
include "../../controller/commentaireC.php";
$commentaireC=new commentaireC();
if (isset($_POST["id_commentaire"])){
    $commentaireC->supprimercommentaire($_POST["id_commentaire"]);
    header('Location: affichercommentaire.php');
}

?>