<?php
namespace App\DAO\MySql\GerenciadorDeLojas;
class LojasDAO extends conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function teste()
    {
        $lojas = $this->pdo->query('SELECT * FROM LOJAS;')->fetchAll(\PDO::FETCH_ASSOC);
        echo "<pre>";
        foreach($lojas as $loja){
            var_dump($loja);
        }
        die;
    }
}