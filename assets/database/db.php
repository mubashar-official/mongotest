<?php 
    require 'vendor/autoload.php';
    Class Database
    {
    //$client = new MongoDB\Client("mongodb://localhost:27010");

            
        private $client ; 
        private $companydb;

        public function connect()
        {
            $client  = new MongoDB\Client;
            $userMange = $client->userMange;
            return $userMange;
        }
        
    }
   
    
?>
