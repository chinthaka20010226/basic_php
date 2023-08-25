<!-- Creating Object without Constructor Method -->

<!-- <?php
    class Car{
        //Attributes / Propertices
        public $brand;
        public $model;

        // Behaviorals / Methods
        public function startEngine(){
            echo "Engine started<br>";
        }
    }

    $myCar = new Car();
    $myCar -> brand = "Toyota";
    $myCar -> model = "Corolla";
    echo $myCar -> brand . "<br>";
    echo $myCar -> model . "<br>";
    $myCar -> startEngine();

    $yourCar = new Car();
    $yourCar -> brand = "Susuky";
    $yourCar -> model = "java";
    echo $yourCar -> brand . "<br>" . $yourCar -> model . "<br>";
    $yourCar -> startEngine();

?> -->


<!-- Creating Object by using Constructor Method -->

<!-- <?php
    class Car_{
        public $brand;
        public $model;

        public function __construct($brand,$model){
            $this -> brand = $brand;
            $this -> model = $model;
        }
        
        public function startEngine(){
            echo "Engine is strated";
        }
            
    }

    $myCar = new Car_("Toyota","Corolla");
    echo $myCar -> brand . "<br>" . $myCar -> model . "<br>";
    $myCar -> startEngine();

?> -->


<!-- Inheritance -->

<?php
    class Car__{
        public $brand;
        public $model;

        public function __construct($brand,$model){
            $this -> brand = $brand;
            $this -> model = $model;
        }
        
        public function startEngine(){
            echo "Engine is strated";
        }
    }

    class ElectricCar extends Car__{
        public function startEngine(){
            echo "Electric car engine is started";
        }
    }

    $myCar = new ElectricCar("Toyota","Corolla");
    $myCar -> startEngine();

?>