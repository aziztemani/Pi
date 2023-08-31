<?PHP
include "../../model/cours.php";
include "../../controller/coursC.php";

if (isset($_GET['Idcours']) and isset($_GET['title']) and isset($_GET['description']) and isset($_GET['date']) ){


$Idcours=$_GET['Idcours'];
$title=$_GET['title'];
$description=$_GET['description'];
$date=$_GET['date'];




if($description!= "" && $date!= "" && $Idcours!= "" && $title!= "" )
{ // si les saisies ne sont pas vides
if ( preg_match ( "#^([0-9]){2}\-([0-9]){2}\-([0-9]){4}$#" , $date ) )
{
if((is_numeric($Idcours)) && (strlen($Idcours)==6 ) ){

$cours1=new cours($_GET['Idcours'],$_GET['title'],$_GET['description'],$_GET['date']);
$cours1C=new coursC();
$cours1C->ajoutercours($cours1);
header('Location: affichercours.php');
}else {echo "verifiez l'id  ou titre";}

}else {echo" veuillez entrez la date sous forme jj-mm-aaaa ";}

}else{echo" les champs sont vides";}
}
else{
  echo "verifier les champs";
}



?>