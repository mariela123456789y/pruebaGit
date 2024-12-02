<?php
    class db{
        private $host ="localhost:8080";
        private $dbname ="bdcolegio"
        private $user ="root"
        private $pass=" "
        public function conexion():PDO{
            try {
                $PDO = new PDO(dns: "mysql:host = " .$this->host.";dbname=".
                $this->dbname,username: $this->user,password: $this->pass);
                $PDO->setAttribute(attribute: PDO::ATTR_ERRMORE,value:
                PDO::ERRODE_EXCEPTION);
            } catch (PDOException $e) {
                throw  new Exception(message: "Eroor al conectar la base de datos ".$e->getMessage());
            }
        }
    }
?>















