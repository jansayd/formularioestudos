<?php

namespace App\Classes;

use App\Classes\Model\DefaultModel;
use \PDO;

/**
 * Class Usuario
 * @package App\Classes
 */
class Endereco extends DefaultModel
{

    public $id;
    public $cidadao_id;
    public $cep;
    public $logradouro;
    public $numero;
    public $bairro;
    public $complemento;
    public $uf;
    public $municipio;
    public $tempomoradia;
    public $celular;
    public $contato;
    public $email;

    /**
     * @return mixed
     */
    public function save()
    {
        $stmt = DB::prepare("INSERT INTO endereco(cidadao_id, cep, logradouro, numero, bairro, complemento, uf, municipio, tempomoradia, celular, contato, email) values (:cidadao_id, :cep, :logradouro, :numero, :bairro, :complemento, :uf, :municipio, :tempomoradia, :celular, :contato, :email)");

        $stmt->bindValue(":cidadao_id", $this->cidadao_id, PDO::PARAM_STR);
        $stmt->bindValue(":cep", $this->cep, PDO::PARAM_STR);
        $stmt->bindValue(":logradouro", $this->logradouro, PDO::PARAM_STR);
        $stmt->bindValue(":numero", $this->numero, PDO::PARAM_STR);
        $stmt->bindValue(":bairro", $this->bairro, PDO::PARAM_STR);
        $stmt->bindValue(":complemento", $this->complemento, PDO::PARAM_STR);
        $stmt->bindValue(":uf", $this->uf, PDO::PARAM_STR);
        $stmt->bindValue(":municipio", $this->municipio, PDO::PARAM_STR);
        $stmt->bindValue(":tempomoradia", $this->tempomoradia, PDO::PARAM_STR);
        $stmt->bindValue(":celular", $this->celular, PDO::PARAM_STR);
        $stmt->bindValue(":contato", $this->contato, PDO::PARAM_STR);
        $stmt->bindValue(":email", $this->email, PDO::PARAM_STR);

        $stmt->execute();

        return DB::lastInsertId();
    }
}
