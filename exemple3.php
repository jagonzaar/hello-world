<?php

            class Dog{
                public $numLegs = 4;
                public $name;
            
            public function __construct($name){
                $this->name = $name;
				//bark();
				//greet();

            
            }
			public function bark(){
				return "Woof!</br>";
            }
			public function greet(){
				return "Bow wow my name is ". $this->name . " bow wow!!</br>";
            }

			}
			$dog1 = new Dog("Barker");
            $dog2 = new Dog("Amigo");
            echo $dog1->bark();
echo $dog2->greet();