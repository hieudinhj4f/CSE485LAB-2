<?php
    class Data{
        private $Servername;
        private $Username ;
        private $Password ;
        private $Database ;

        public Function getConnection($Servername,$Username,$Password,$Database){
            try{
                $conn = new PDO("mysql:host=$Servername;dbname=$Database", $Username, $Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Successfully connected to the database';
            }
            catch (Exception $e){
                echo "Error: " . $e->getMessage();
            }
        }
    }