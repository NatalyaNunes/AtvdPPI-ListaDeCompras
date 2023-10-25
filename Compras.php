<?php

class Compras{
    private string $nome;
    private double $valor_uni;
    private int $qntdAdquirida;


    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    public function getValor_uni(){
        return $this->valor_uni;
    }

    public function setValor_uni($valor_uni){
        $this->valor_uni = $valor_uni;

        return $this;
    }

    public function getQntdAdquirida(){
        return $this->qntdAdquirida;
    }

    public function setQntdAdquirida($qntdAdquirida)
    {
        $this->qntdAdquirida = $qntdAdquirida;

        return $this;
    }
}