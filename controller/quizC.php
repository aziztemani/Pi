<?php
include "../../config.php";


  class QuizC
  {
    function afficherQuiz($Quiz){

echo "Idquiz: ".$Quiz->getIdquiz()."<br>";        
echo "Idcours: ".$Quiz->getIdcours()."<br>";
echo "title: ".$Quiz->gettitle()."<br>";
        echo "question_count: ".$Quiz->getquestion_count()."<br>";
        echo "duration: ".$Quiz->getduration()."<br>";
   
                              }
    

    function ajouterQuiz($Quiz){
        $sql="INSERT INTO Quiz (Idquiz,Idcours,title,question_count,duration) VALUES (:Idquiz,:Idcours,:title,:question_count,:duration)";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            
$Idquiz=$Quiz->getIdquiz();                     
$Idcours=$Quiz->getIdcours();
$title=$Quiz->gettitle();
                     $question_count=$Quiz->getquestion_count();
                     $duration=$Quiz->getduration();
             


             
$req->bindVAlue(':Idquiz',$Idquiz);                            
$req->bindVAlue(':Idcours',$Idcours);
$req->bindVAlue(':title',$title);
                            $req->bindVAlue(':question_count',$question_count);
                            $req->bindVAlue(':duration',$duration);
                       

          $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
 
        }
    }




    function afficherQuizs(){
        $sql = "SElECT * From Quiz ORDER BY Idquiz";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
   
    
    }




    




    function supprimerQuiz($Idquiz)
    {
        $sql = "DELETE FROM Quiz WHERE Idquiz= :Idquiz";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Idquiz', $Idquiz);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function recupererQuiz($Idquiz){
        $sql="SELECT * from Quiz where Idquiz=$Idquiz";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   

      

    function modifierQuiz($Quiz,$Idquiz){
        $sql="UPDATE Quiz SET Idquiz=:Idquiz,Idcours=:Idcours, title=:title, question_count=:question_count,duration=:duration WHERE Idquiz=:Idquiz";
        
        $db = config::getConnexion();
       
try{        
    $req = $db->prepare($sql);
$Idcours=$Quiz->getIdcours();
       $Idquiz=$Quiz->getIdquiz();
       $title=$Quiz->gettitle();
       $question_count=$Quiz->getquestion_count();
       $duration=$Quiz->getduration();
       

        $datas=array(':Idquiz'=>$Idquiz,':Idcours'=>$Idcours, ':title'=>$title, ':question_count'=>$question_count,':duration'=>$duration);
$req->bindValue(':Idquiz',$Idquiz);         
$req->bindValue(':Idcours',$Idcours);
$req->bindValue(':title',$title);
         $req->bindVAlue(':question_count',$question_count);
         $req->bindVAlue(':duration',$duration);
        

         $s=$req->execute();
            
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

        // la fonction list permet de lister les donnee du table quiz avec le tri par nom
        function triquestion_count(){
            $sql="SELECT * FROM quiz ORDER BY question_count ASC";
        $db = config::getConnexion();
              try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
}        

  // la fonction list permet de lister les donnee du table quiz avec le tri par nom
        function triduration(){
            $sql="SELECT * FROM quiz ORDER BY duration ASC";
        $db = config::getConnexion();
              try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
} 


function trititle(){
    $sql="SELECT * FROM quiz ORDER BY title ASC";
$db = config::getConnexion();
      try{
$liste=$db->query($sql);
return $liste;
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}  
}     

}

?>

    


    