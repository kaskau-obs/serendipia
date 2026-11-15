<?php
  class Poderoso(){
    public $nome;
    public $idade;
    public $poder;
  }

    public function __construct($nome, $idade, $poder){
      public $this->nome = $nome;
      public $this->idade = $idade;
      public $this->poder = $poder;
    }
/*
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
      return $this->idade;
    }
    public function setIdade($idade){
      $this->idade = $idade;
    }
    public function getPoder(){
      return $this->poder;
    }
    public function setPoder($poder){
      $this->poder = $poder;
    }
*/
  public function mostrarPoder(){
    return "O poder de $this->nome é $this->poder";
  }