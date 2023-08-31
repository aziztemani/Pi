<?PHP
               
    class Quiz{
        private  $Idquiz;
        private  $Idcours;
        private  $title;
        private  $question_count;
        private  $duration;



        
        
        function __construct($Idquiz,$Idcours,$title,$question_count,$duration){
            
            $this->Idquiz=$Idquiz;
            $this->Idcours=$Idcours;
            $this->title=$title;
            $this->question_count=$question_count;
            $this->duration=$duration;


            
        }

        
      function getIdquiz() {
            return $this->Idquiz;
        }
       function getIdcours() {
            return $this->Idcours;
        }
        function gettitle() {
            return $this->title;
        }
        function getquestion_count() {
            return $this->question_count;
        }
         function getduration() {
            return $this->duration;
        }


        

        
       function setIdquiz($Idquiz) {
            $this->Idquiz=$Idquiz;
        }
       function setIdcours($Idcours) {
            $this->Idcours=$Idcours;
        }
        function settitle($title) {
            $this->title=$title;
        }
       function setquestion_count($question_count) {
            $this->question_count=$question_count;
        }
       function setduration($duration) {
            $this->duration=$duration;
        }


        
    }
?>