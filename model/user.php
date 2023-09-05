<?php
    class user {

        private $id;
        private $nom;
        private $prenom;
        private $email;
        private $tel;
        private $naiss;
        private $classe;
        private $sexe;
        private $role;
        private $mdp;
        private $pic;


        public function __construct($id, $nom, $prenom, $email, $tel, $naiss, $classe, $sexe,$role, $mdp)
        {   $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->tel = $tel;
            $this->naiss = $naiss;
            $this->classe = $classe;
            $this->sexe = $sexe;
            $this->role = $role;
            $this->mdp = $mdp;
        }

        public function getpic(){
            return $this->pic;
        }
      
        public function getId()
        {
            return $this->id;
        }
    
    
        public function getNom()
        {
            return $this->nom;
        }
    
    
        public function getPrenom()
        {
            return $this->prenom;
        }
    
    
        public function getMail()
        {
            return $this->email;
        }
    
    
        public function getTel()
        {
            return $this->tel;
        }
    
    
        public function getNaiss()
        {
            return $this->naiss;
        }
    
    
        public function getClasse()
        {
            return $this->classe;
        }
    
    
        public function getSexe()
        {
            return $this->sexe;
        }
        public function getRole()
        {
            return $this->role;
        }
        public function getMdp()
        {
            return $this->mdp;
        }
    
    
    
        public function set($id)
        {
            $this->id = $id;
        }
    
    
        public function setNom($nom)
        {
            $this->nom = $nom;
        }
    
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }
    
        public function setMail($email)
        {
            $this->email = $email;
        }
    
    
        public function setTel($tel)
       {
            $this->tel =$tel;
       }
    
    
        public function setNaiss($naiss)
        {
            $this->naiss = $naiss;
        }
    
    
        public function setClasse($classe)
        {
            $this->classe = $classe;
        }
    
        public function setSexe($sexe)
        {
            $this->sexe = $sexe;
        }
        public function setRole($role)
        {
            $this->role = $role;
        }
    
        public function setMdp($mdp)
        {
            $this->mdp = $mdp;
        }
    

    }




?>