<?php

namespace App\Models;


class Animal{
    
    private $id;
    private $nome;
    private $fk_raca;
    private $sexo;
    private $especie;
    private $data_nascimento;
    private $data_atualizacao;
    private $data_falecimento;

    public function getId(){
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getFkRaca(){
        return $this->fk_raca;
    }

    public function setFkRaca(int $fk_raca)
    {
        $this->fk_raca = $fk_raca;
        return $this;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo(string $sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    public function getEspecie(){
        return $this->especie;
    }

    public function setEspecie(string $especie)
    {
        $this->especie = $especie;
        return $this;
    }

    public function getDataNascimento(){
        return $this->data_nascimento;
    }

    public function setDataNascimento(string $data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
        return $this;
    }

    public function getDataAtualizacao(){
        return $this->data_atualizacao;
    }

    public function setDataAtualizacao(string $data_atualizacao)
    {
        $this->data_atualizacao = $data_atualizacao;
        return $this;
    }

    public function getDataFalecimento(){
        return $this->data_falecimento;
    }

    public function setDataFalecimento(string $data_falecimento)
    {
        $this->data_falecimento = $data_falecimento;
        return $this;
    }


}