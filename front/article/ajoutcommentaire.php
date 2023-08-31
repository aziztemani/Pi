<?PHP
include "../../model/commentaire.php";
include "../../controller/commentaireC.php";

if (isset($_GET['id_article'])and isset($_GET['commentaire'])){

$id_article=$_GET['id_article'];

$commentaire=$_GET['commentaire'];
if( $id_article!= "" &&  $commentaire!= "" )
{

if ( ( is_numeric($id_article) ) ) {
$commentaire1=new commentaire($_GET['id_article'],$_GET['commentaire']);



$commentaire1C=new commentaireC();
$commentaire1C->ajoutercommentaire($commentaire1);
header('Location: affichercommentaire.php');
  

}}
}

else{
  echo "verifier les champs";
}



?>