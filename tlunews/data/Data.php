<?php
    class Data{
        private $Servername;
        private $Username ;
        private $Password ;
        private $Database ;
        private $conn;

        public function __construct(){
            $this->Servername = DB_HOST;
            $this->Username = DB_USER;
            $this->Password = DB_PASS;
            $this->Database = DB_NAME;
            try{
                $this->conn = new PDO("mysql:host=$this->Servername;dbname=$this->Database", $this->Username, $this->Password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (Exception $e){
                $this->conn = null;
            }
        }
        public Function getConnection(){
            return $this->conn;
        }
    }