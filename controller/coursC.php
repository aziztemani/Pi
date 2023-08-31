<?php
include "../../config.php";


  class CoursC
  {
    function afficherCours($Cours){

        echo "Idcours: ".$Cours->getIdcours()."<br>";
        echo "title: ".$Cours->gettitle()."<br>";
	echo "description: ".$Cours->getdescription()."<br>";
        echo "date: ".$Cours->getdate()."<br>";
        
                              }
    

    function ajouterCours($Cours){
        $sql="INSERT INTO Cours (Idcours,title,description,date) VALUES (:Idcours,:title,:description,:date)";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            
                     $Idcours=$Cours->getIdcours();
                     $title=$Cours->gettitle();
                     $description=$Cours->getdescription();
			        
                     $date=$Cours->getdate();
                     


             
                            $req->bindVAlue(':Idcours',$Idcours);
                            $req->bindVAlue(':title',$title);
                            $req->bindVAlue(':description',$description);
			    
                            $req->bindVAlue(':date',$date);
                            

          $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
 
        }
    }




    function afficherCourss(){
        $sql = "SElECT * From Cours ORDER BY Idcours";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
   
    
    }




    




    function supprimerCours($Idcours)
    {
        $sql = "DELETE FROM Cours WHERE Idcours= :Idcours";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Idcours', $Idcours);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function recupererCours($Idcours){
        $sql="SELECT * from Cours where Idcours=$Idcours";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   

      

    function modifierCours($Cours,$Idcours){
        $sql="UPDATE Cours SET Idcours=:Idcours,title=:title,description=:description,date=:date  WHERE Idcours=:Idcours";
        
        $db = config::getConnexion();
       
try{        
    $req = $db->prepare($sql);
       $Idcours=$Cours->getIdcours();
       $title=$Cours->gettitle();
       $description=$Cours->getdescription();
    $date=$Cours->getdate();

        $datas=array(':Idcours'=>$Idcours,':title'=>$title,':description'=>$description,':date'=>$date);
         $req->bindValue(':Idcours',$Idcours);
         $req->bindVAlue(':title',$title);
         $req->bindVAlue(':description',$description);
         $req->bindVAlue(':date',$date);
         
	

         $s=$req->execute();
            
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
        // la fonction list permet de lister les donnee du table Cours avec le tri par title
        function trititle(){
            $sql="SELECT * FROM cours ORDER BY title ASC";
        $db = config::getConnexion();
              try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
}        

        // la fonction list permet de lister les donnee du table Cours avec le tri par date
        function tridate(){
            $sql="SELECT * FROM cours ORDER BY date ASC";
$db = config::getConnexion();
              try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
}    

        function tridescription(){
            $sql="SELECT * FROM cours ORDER BY description ASC";
$db = config::getConnexion();
              try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
}  

  


public function AffichercoursFiltre($title){
        $sql="SELECT * FROM cours where 1=1 ";
        if($title != '')
            $sql .='  and title like :title' ;
       
        
        $db = config::getConnexion();
        $req=$db->prepare($sql);
		
        if($title != '')
			$req->bindValue(':title', $title);
		
       
		
        try{
            $req->execute();
            return $req->fetchAll();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}


?>
    


    