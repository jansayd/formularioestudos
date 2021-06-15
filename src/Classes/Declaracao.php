<?php

namespace App\Classes;

use App\Classes\Model\DefaultModel;
use \PDO;

/**
 * Class Usuario
 * @package App\Classes
 */
class Declaracao extends DefaultModel
{

    public $id;
    public $cidadao_id;
    public $datanascimento;
    public $genero;
    public $nacionalidade;
    public $estado;
    public $municipio;
    public $escolaridade;
    public $vinculoempregaticio;
    public $renda;
    public $mulherchefe;
    public $oncologico;
    public $cronico;
    public $deficiente;
    public $tipodeficiente;

    /**
     * @return mixed
     */
    public function save()
    {
        $stmt = DB::prepare("INSERT INTO declaracao(cidadao_id, datanascimento, genero, nacionalidade, estado, municipio, escolaridade, vinculoempregaticio, renda, mulherchefe, oncologico, cronico, deficiente, tipodeficiente) values (:cidadao_id, :datanascimento, :genero, :nacionalidade, :estado, :municipio, :escolaridade, :vinculoempregaticio, :renda, :mulherchefe, :oncologico, :cronico, :deficiente, :tipodeficiente)");

        $stmt->bindValue(":cidadao_id", $this->cidadao_id, PDO::PARAM_STR);
        $stmt->bindValue(":datanascimento", $this->datanascimento, PDO::PARAM_STR);
        $stmt->bindValue(":genero", $this->genero, PDO::PARAM_STR);
        $stmt->bindValue(":nacionalidade", $this->nacionalidade, PDO::PARAM_STR);
        $stmt->bindValue(":estado", $this->estado, PDO::PARAM_STR);
        $stmt->bindValue(":municipio", $this->municipio, PDO::PARAM_STR);
        $stmt->bindValue(":escolaridade", $this->escolaridade, PDO::PARAM_STR);
        $stmt->bindValue(":vinculoempregaticio", $this->vinculoempregaticio, PDO::PARAM_STR);
        $stmt->bindValue(":renda", $this->renda, PDO::PARAM_STR);
        $stmt->bindValue(":mulherchefe", $this->mulherchefe, PDO::PARAM_STR);
        $stmt->bindValue(":oncologico", $this->oncologico, PDO::PARAM_STR);
        $stmt->bindValue(":cronico", $this->cronico, PDO::PARAM_STR);
        $stmt->bindValue(":deficiente", $this->deficiente, PDO::PARAM_STR);
        $stmt->bindValue(":tipodeficiente", $this->tipodeficiente, PDO::PARAM_STR);

        $stmt->execute();

        return DB::lastInsertId();
    }
}
