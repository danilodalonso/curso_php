<?php

class Conta{

    private $numero;
    private $cliente;

    public function setNumero($valor){
        $this->numero = $valor;
    
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setCliente($valor){
        $this->cliente = $valor;
    }

    public function getCliente(){
        return $this->cliente;
    }

}



$cliente1 = new Conta();
$cliente1->setCliente("Danilo");
$cliente1->setNumero("999999");


echo $cliente1->getCliente()."<br/>";
echo $cliente1->getNumero();