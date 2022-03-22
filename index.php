<?php

class Pessoa
{
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getEndereco(){
        return $this->endereco;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getBairro(){
        return $this->bairro;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCep(){
        return $this->cep;
    }
}

$temp = new Pessoa();

$temp->setNome("Pedro Henrique Santos de Jesus <br>");
echo $temp->getNome();

$temp->setEndereco("Rua do Pedroca, 16 <br>");
echo $temp->getEndereco();

$temp->setBairro("AE Carvalho <br>");
echo $temp->getBairro();

$temp->setCep("01234-567");
echo $temp->getCep();

?>