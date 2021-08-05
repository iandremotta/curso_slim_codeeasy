<?php 
namespace App\DAO\MySql\GerenciadorDeLojas;

abstract class conexao{

        /** 
        *@var \PDO
        */
        
        protected $pdo;

        public function __construct()
        {
            $host = getenv('GERENCIADOR_DE_LOJAS_HOST');
            $port = getenv('GERENCIADOR_DE_LOJAS_PORT');
            $user = getenv('GERENCIADOR_DE_LOJAS_USER');
            $password = getenv('GERENCIADOR_DE_LOJAS_PASSWORD');
            $dbname = getenv('GERENCIADOR_DE_LOJAS_DBNAME');

            $dns = "mysql:host={$host};dbname={$dbname};port={$port}";
            $this->pdo = new \PDO($dns,$user,$password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION);
        }
    }
