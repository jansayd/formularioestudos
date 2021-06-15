<?php

namespace App\Classes;

/**
 * Class Erros
 * @package App\Classes
 */
class Erros
{
    private $errors = [];

    /**
     * @param $message
     */
    public function addMessage($message)
    {
        $this->errors[] = $message;
    }

    /**
     * Caso algum erro tenha sido cadastrado, ele retorna true caso tenha erro
     * @return bool
     */
    public function hasError()
    {
        return count($this->errors) > 0;
    }

    /**
     * @return string
     */
    public function toString()
    {
        $ret = '';
        $i   = 0;
        if ($this->hasError()) {
            $ret = '<div class="alert alert-danger" role="alert">';
            foreach ($this->errors as $erro) {
                $ret .= sprintf("%s) %s<br/>", str_pad(++$i, 2, 0, STR_PAD_LEFT), $erro);
            }
        } else {
            $ret = '<div class="alert alert-success" role="alert">Usuário cadastrado com sucesso';

        }

        return $ret .= "</div>";
    }
}
