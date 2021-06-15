<?php

namespace App\Classes;

use PDO;

/**
 * Class Usuario
 * @package App\Classes
 */
class Usuario
{
    public $id;
    public $nome;
    public $email;
    public $usuario;
    public $senha;

    /**
     * @var Erros
     */
    public $errors;

    public function __construct()
    {
        $this->errors = new Erros();
    }

    /**
     * Salva os dados do usuário no banco
     * @return bool|mixed
     */
    public function save()
    {
        if (!$this->validateData()) {
            return $this->createUser();
        }
        return false;
    }

    /**
     * Valida os dados do cadastro
     * @return bool
     */
    private function validateData()
    {
        if (empty($this->nome)) {
            $this->errors->addMessage("O nome é obrigatório");
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors->addMessage("O e-mail é inválido");
        }

        if (strlen($this->senha) < 6) {
            $this->errors->addMessage("A senha deve ter no minímo 6 caracteres!");
        }
        if ($this->emailExiste($this->email, 'email')) {
            $this->errors->addMessage("Esse e-mail já está cadastrado");
        }
        if ($this->emailExiste($this->usuario, 'usuario')) {
            $this->errors->addMessage("Esse usuário já está cadastrado");
        }

        return $this->errors->hasError();
    }

    /**
     * @return mixed
     */
    private function createUser()
    {
        $stmt = DB::prepare("insert into usuarios (nome, email, usuario, senha) values (:nome, :email, :usuario, :senha)");

        $return = $stmt->execute([
            ':nome'    => $this->nome,
            ':email'   => $this->email,
            ':usuario' => $this->usuario,
            ':senha'   => md5($this->senha)
        ]);

        $this->id = DB::lastInsertId();

        return $return;
    }

    /**
     * Verifica se o usuário ou senha já existem
     * @param $valor
     * @param $campo
     * @return mixed
     */
    private function emailExiste($valor, $campo)
    {
        $sql  = "SELECT id FROM usuarios WHERE $campo = :usuario";
        $stmt = DB::prepare($sql);
        $stmt->execute([':usuario' => $valor]);
        return $stmt->fetch();
    }

    /**
     * @return string
     */
    public function registrationMessage()
    {
        return $this->errors->toString();
    }

    /**
     * Salva os dados do usuário na sessão
     */
    public function saveDataToSession()
    {
        $_SESSION['id']          = $this->id;
        $_SESSION['nome']        = $this->nome;
        $_SESSION['email']       = $this->email;
        $_SESSION['usuario']     = $this->usuario;
        $_SESSION['logado']      = true;
        $_SESSION['control_aba'] = 0;

        return true;
    }

    /**
     * @param $usuario
     * @param $senha
     * @return bool
     */
    public function login($usuario, $senha)
    {
        $sql  = "select * from usuarios where usuario = :usuario and senha = :senha";
        $stmt = DB::prepare($sql);
        $stmt->execute([
            ':usuario' => $usuario,
            ':senha'   => md5($senha)
        ]);
        $row = $stmt->fetch();

        if ($row) {
            $this->load($row['id']);
            return $this->saveDataToSession();
        }

        $this->errors->addMessage("Usuário ou senha não encontrado");
    }

    /**
     * Carrega os dados de um usuário pra classe
     * @param $id
     */
    private function load($id)
    {
        $sql  = "select * from usuarios where id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row) {
            $this->id      = $row['id'];
            $this->nome    = $row['nome'];
            $this->email   = $row['email'];
            $this->usuario = $row['usuario'];
            $this->senha   = $row['senha'];
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    public function isLoggedIn()
    {
        return array_key_exists('logado', $_SESSION) && $_SESSION['logado'];
    }
}
