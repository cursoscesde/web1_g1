<?php

class Carro{
    // atributos
    public $color = "verde";
    public $brand = "Kia";
    private $placa;

    public function __construct($placa)
    {
        $this->placa = $placa;
    }
    // métodos
    public function arrancar(){
        echo "Estoy arrancando";
    }
    public function frenar(){
        echo "Estoy frenando";
    }
    public function setPlaca($placa){
        if(strlen($placa) < 6){
            echo "Formato inválido";
        }
        else{
            $this->placa = $placa;
        }
    }
    public function getPlaca(){
        return $this->placa;
    }
}
// creo el objeto
$camioneta = new Carro("abc123");
print($camioneta->brand);
// modifico el atributo brand
$camioneta->brand = "Toyota";
print($camioneta->brand);
$camioneta->arrancar();
$placa = $camioneta->getPlaca();
print($placa);
$camioneta->setPlaca("bbb14");
$placa = $camioneta->getPlaca();
print($placa);
$bus = new Carro("cvb123");
print($bus->brand);
$bus->brand = "Dodge";
print($bus->brand);
$bus->frenar();
