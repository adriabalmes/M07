<?php
    /* clase Compte */
    class Compte {
        private $nombre = "Alberto";
        private $apellidos = "Morales Sanz";
        private $saldo = 5000;
 
    /* constructor vacío */
    function __construct2(){
    }

    /* constructor por defecto */
    function __construct($nombre, $apellidos, $saldo) {
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> saldo = $saldo;           
    }
    
    /* constructor alternativo */
    function __construct3($saldo) {
        $this -> saldo = $saldo;
    }
 
    function retirarDinero ($cantidadRetirada) {
        return $newsaldo = $this->saldo - $cantidadRetirada;
    }

    function ingresarDinero ($cantidadIngresada) {
        return $newsaldo = $this->saldo + $cantidadIngresada;
    }

    public function getsaldo() {
        return $this->saldo;
    }

    public function setsaldo($saldo) {
        $this->$saldo;
    }
}

// Prueba por lectura de teclado, pero no funciona.
//$cantidadRetirada = readline("Cúanto dinero quieres retirar?");
//$cliente = new Compte("Adolfo", "Mith", 1000);

    $cliente = new Compte($nombre, $apellidos, $saldo);
    $cliente -> getsaldo();
    $cantidadRetirada = 400;
    echo nl2br("El saldo inicial es de: ".$cliente -> getsaldo()."\n");
    echo nl2br ("La cantidad a retirar es de: ".$cantidadRetirada."\n");
    echo nl2br ("El saldo actual ahora es de: ".$cliente->retirarDinero($cantidadRetirada)."\n");
    echo "<br>";
    $cantidadIngresada = 500;
    echo nl2br("El saldo inicial es de: ".$cliente -> getsaldo()."\n");
    echo nl2br ("La cantidad a ingresar es de: ".$cantidadIngresada."\n");
    echo nl2br ("El saldo actual ahora es de: ".$cliente->ingresarDinero($cantidadIngresada)."\n");

?>