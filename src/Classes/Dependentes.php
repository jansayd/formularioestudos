<?php

namespace App\Classes;

use PDO;

/**
 * Class Usuario
 * @package App\Classes
 */
class Dependentes
{
    public $parentesco;
    public $nome_dep;
    public $cpf_dep;
    public $data_dep;
    public $renda_dep;
    public $oncologico_dep;
    public $cronico_dep;
    public $deficiente_dep;
    public $tipodeficiente_dep;

    /**
     * @param array $data
     */
    public function saveDependenteDataToSession(array $data)
    {
        $unique = uniqid();
        foreach ($data as $key => $value) {
            $_SESSION['dependentes'][$unique][$this->handleKey($key)] = $value;
        }
    }

    /**
     * Recebe as chaves com _dep e remove elas para salvar 'bonitinho' no array
     * @param $key
     */
    private function handleKey($key)
    {
        return str_replace('_dep', '', $key);
    }

    /**
     * @return string
     */
    public function getDependentesTable()
    {
        if (count($_SESSION['dependentes']) > 0) {
            $return = <<<EOL
            <table width="90%" class="table table-striped table-bordered table-condensed table-hover">
            <thead>
            <tr>
            <th>Nome</th>
            <th>Parentesco</th>
            <th>CPF</th>
            <th>Renda</th>
            <th>Nascimento</th>
            <th>Oncológico</th>
            <th></th>
            </thead>
            <tbody>
EOL;

            foreach ($_SESSION['dependentes'] as $unique => $dependente) {
                $return .= "<tr>
                <td>{$dependente['nome']}</td>
                <td>{$dependente['parentesco']}</td>
                <td>{$dependente['cpf']}</td>
                <td>{$dependente['renda']}</td>
                <td>{$dependente['data']}</td>
                <td class='text-center'>{$dependente['oncologico']}</td>
                <td class='text-center'><input type='button' class='btn-xs btn-danger' value='Excluir' onclick=\"deletaDependente('{$unique}')\" /></td>
                </tr>";
            }

            $return .= "</tbody></table>";

            return $return;
        } else {
            return 'Não existem dependentes cadastrados';
        }
    }

    /**
     * @param $unique
     */
    public function deleteDependenteDataFromSession($unique)
    {
        if (array_key_exists($unique, $_SESSION['dependentes'])) {
            unset($_SESSION['dependentes'][$unique]);
        }
    }
}
