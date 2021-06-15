<?php

namespace App\Classes;

use App\Classes\Model\DefaultModel;
use \PDO;

/**
 * Class Usuario
 * @package App\Classes
 */
class Cidadao extends DefaultModel
{
    public $nome;
    public $cpf;
    public $dt_cadastro;

    /**
     * @return mixed
     */
    public function save()
    {
        $stmt = DB::prepare("INSERT INTO cidadao(nome, cpf, dt_cadastro) values (:nome, :cpf, now())");

        $stmt->bindValue(":nome", $this->nome, PDO::PARAM_STR);
        $stmt->bindValue(":cpf", $this->cpf, PDO::PARAM_STR);

        $stmt->execute();

        return DB::lastInsertId();
    }
}
