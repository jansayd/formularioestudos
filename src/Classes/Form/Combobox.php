<?php

namespace App\Classes\Form;

class Combobox
{
    public function simNao($name, $default = null)
    {
        $options_array = ['S' => 'Sim', 'N' => 'Não'];
        $options       = $this->mountOptions($options_array, $default);
        return $this->combo($name, $options);
    }

    public function UF($default = null)
    {
        $ufs     = ['AM' => 'Amazonas', 'MG' => 'Minas Gerais'];
        $options = $this->mountOptions($ufs, $default);
        return $this->combo('uf', $options);
    }

    public function genero($default = null)
    {
        $generos = ['M' => 'Masculino', 'F' => 'Feminino'];
        $options = $this->mountOptions($generos, $default);
        return $this->combo('genero', $options);
    }

    /**
     * @param array $optins
     */
    private function mountOptions(array $options, $default = null)
    {
        $ret = '';
        foreach ($options as $key => $value) {
            $selected = $key == $default ? 'selected="selected"' : '';
            $ret      .= "<option value='{$key}' {$selected}>{$value}</options>\n";
        }
        return $ret;
    }

    /**
     * @param $name
     * @param $options
     * @return string
     */
    private function combo($name, $options)
    {
        return sprintf("%s%s%s", "<select class='form-control' id='{$name}' name='{$name}'>", $options, "</select>\n");
    }
}
