
    <?php
    
    /* clase vehicle */
    class vehicle {
        public $marca
        public $modelo
        public $numPlazas
        public $color
        public $combustible
        }

        /* constructor vacío */
        function __construct(){
        }

        /* constructor por defecto */
        function __construct($marca, $modelo, $numPlazas, $color, $combustible) {
            $this -> marca = $marca;
            $this -> modelo = $modelo;
            $this -> numPlazas = $numPlazas;
            $this -> color = $color;
            $this -> combustible = $combustible;            
        }
        
        /* constructor alternativo */
        function __construct($marca, $modelo, $numPlazas) {
            $this -> marca = $marca;
            $this -> modelo = $modelo;
            $this -> numPlazas = $numPlazas;
        }

            
    ?>

