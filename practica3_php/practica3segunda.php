
    
     <?php
    
    /* clase Compte */
    class Compte {
        private $nombre = "Alberto";
        private $apellidos = "Morales Sanz";
        private $saldo = 5100;
        

        function dollars (){
            if () {

            }
        }
    /* constructor vacío */
    function __construct(){
    }

    /* constructor por defecto */
    function __construct2($nombre, $apellidos, $saldo) {
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> saldo = $saldo;           
    }
    
    /* constructor alternativo */
    function __construct3($saldo) {
        $this -> saldo = $saldo;
    }
        /* self::class */
    
        public function __toString () {
        return "Marca del vehículo: ".$this->marca. " "."Modelo del vehículo: ".$this->modelo;
    }
       

}

?>