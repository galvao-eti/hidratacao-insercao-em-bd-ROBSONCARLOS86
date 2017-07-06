<?php

namespace Pos;

class Usuario {

    private $login;
    private $senha;

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        if ($senha == "") {
            throw new \Exception("Informe a Senha");
            return;
        }
        $this->senha = $senha;
    }

    use Traits\Hidratacao;

    public function salvarBanco(\PDO $conn) {
        $login = $this->getLogin();
        $senha = $this->getSenha();
        try {
            $sql = "Insert into tbusuario (login, senha) values (:login, :senha)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":login", $login);
            $stmt->bindParam(":senha", $senha);
            $stmt->execute();
        } catch (Exception $ex) {
            die("<pre>" . __FILE__ . " - " . __LINE__ . "\n" . print_r($ex, true) . "</pre>");
        }
    }

}
