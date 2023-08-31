<?PHP
               
    class Cours{
        private  $Idcours;
        private  $title;
        private  $description;
        private  $date;
        
	    


        
        
        function __construct($Idcours,$title,$description,$date){
            
            $this->Idcours=$Idcours;
            $this->title=$title;
            $this->description=$description;
            $this->date=$date;
           
	     

            
        }
        
      function getIdcours() {
            return $this->Idcours;
        }
       function gettitle() {
            return $this->title;
        }
        function getdate() {
            return $this->date;
        }
         function getdescription() {
            return $this->description;
        }
    
        

        
       function setIdcours($Idcours) {
            $this->Idcours=$Idcours;
        }
       function settitle($title) {
            $this->title=$title;
        }
       function setdate($date) {
            $this->date=$date;
        }
       function setdescription($description) {
            $this->description=$description;
        }


        
    }
?>