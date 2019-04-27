<?php

class Anamnese {

    protected $id;
    protected $descricao;
    protected $resposta;

    //Metodos Set
    public function setId(int $id){
        $this->id = $id;
    }
    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }
    public function setResposta(int $resposta){
        $this->resposta = $resposta;
    }

    //Metodos Get
    public function getId(){
        return $this->id;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getResposta(){
        return $this->resposta;
    }
}

