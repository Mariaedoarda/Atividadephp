<?php
class Pessoa{
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;

    public function setNome($nome) {
       $this-> nome = $nome;
    }
    public function getNome(){
        return $this-> nome;
    }

    public function setEndereco($endereco){
        $this-> endereco = $endereco;
    }
    public function getEndereco(){
        return $this-> endereco;
    }

    public function setBairro($bairro){
        $this-> bairro = $bairro;
    }
    public function getBairro(){
        return $this-> bairro;
    }

    public function setCep($cep){
        $this-> cep = $cep;
    }
    public function getCep(){
        return $this-> cep;
    }

}

$temp = new Pessoa();
$temp->setNome("Maria Eduarda Matos Moreira");
echo $temp->getNome() . "<br>";

$temp->setEndereco("Av aguia de haia");
echo $temp->getEndereco() . "<br>";

$temp->setBairro("Bairro do limoeiro");
echo $temp->getBairro() . "<br>";

$temp->setCep("94264-208");
echo $temp->getCep() . "<br>";

?>