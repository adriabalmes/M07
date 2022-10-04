<?php
    /* clase vehicle */
    class Vehicle {
            private $marca;
            private $modelo;
            private $numplazas;
            private $color;
            private $combustible;
            
        /* constructor vacío */
        function __construct(){
        }

        /* constructor por defecto */
        function __construct2($marca, $modelo, $numplazas, $color, $combustible) {
            $this -> marca = $marca;
            $this -> modelo = $modelo;
            $this -> numplazas = $numplazas;
            $this -> color = $color;
            $this -> combustible = $combustible;            
        }
        
        /* constructor alternativo */
        function __construct3($marca, $modelo, $numplazas) {
            $this -> marca = $marca;
            $this -> modelo = $modelo;
            $this -> numplazas = $numplazas;
        }
        /* getter marca */
        public function getMarca () {
            return $this -> marca; 
        } 
        /* setter marca */
        public function setmarca ($marca) {
            $this -> marca = $marca; 
        } 
        /* getter modelo */
        public function getmodelo () {
            return $this -> modelo; 
        } 
        /* setter modelo */
        public function setmodelo ($modelo) {
            $this -> modelo = $modelo; 
        }
        /* getter numplazas */
        public function getnumplazas () {
            return $this -> numplazas; 
        } 
        /* setter numplazas */
        public function setnumplazas ($numplazas) {
            $this -> numplazas = $numplazas; 
        } 
        /* getter color */
        public function getcolor () {
            return $this -> color; 
        } 
        /* setter color */
        public function setcolor ($color) {
            $this -> color = $color; 
        } 
        /* getter combustible */
        public function getcombustible () {
            return $this -> combustible; 
        } 
        /* setter combustible */
        public function setcombustible ($combustible) {
            $this -> combustible = $combustible; 
        } 
            
        public function __toString () {
            return "Marca del vehículo: ".$this->marca. " "."Modelo del vehículo: ".$this->modelo;
        }
    }
?>