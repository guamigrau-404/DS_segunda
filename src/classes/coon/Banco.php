<?php

    class Banco {

        protected string $driver = 'MySQL';
        protected string $ip = '127.0.0.1';
        protected string $dbname = 'sisos';
        protected string $username = 'root';
        protected string $password = 'root';
        protected int $port = 3306;

        protected $pdo;

        public function conectar() : bool|string{

            $host = $this->ip.':'.$this->port;            
            $dsn = "mysql:host={$host};dbname={$this->dbname};charset=utf8mb4";

            try{
                $this->pdo = new PDO($dsn, 
                                    $this->username, 
                                    $this->password, 
                                    [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);

                return 'Parabéns Seu CORNO!!! Você conectou-se a um banco de dados!';
            }catch (PDOException $e) {
                return 'Erro ao conectar: '. $e->getMessage();
            }           
        }
    }