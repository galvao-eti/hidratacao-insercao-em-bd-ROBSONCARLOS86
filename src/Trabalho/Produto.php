<?php

namespace Pos;

class Produto {

    private $descricao;
    private $valor;

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor($valor) {
        if ($valor < 1) {
            throw new \Exception("Informe um valor Valido");
            return;
        }
        $this->valor = $valor;
    }

    use Traits\Hidratacao;

    public function salvarBanco(\PDO $conn) {
        $descricao = $this->getDescricao();
        $valor = $this->getValor();
        try {
            $sql = "Insert into tbproduto (descricao, valor) values (:descricao, :valor)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":valor", $valor);
            $stmt->execute();
        } catch (\Exception $ex) {
            die("<pre>" . __FILE__ . " - " . __LINE__ . "\n" . print_r($ex, true) . "</pre>");
        }
    }

}
