<?php
    class Employee{

            public $name ;
            public $nam="alu";
            const tex = 15;
            public $house_rent;

            function __construct($n,$m) {
                 $this->name=$n;
                 $this->house_rent=$m;
            }

            public function salary($basic=3000) {
                return "Name : ".$this->name."<br>"." Total Salary : ".($basic+($basic*$this->house_rent)/100)."<hr>";
            }

            public function __set($name,$value) {
                return $this->$name=$value;
               // Bujinai== return $this->$name=$value;
                 
            }
            public function __get($name) {
                return $this->$name;
            }


        }
    
    $emp = new Employee("Rakib",15);
    echo $emp->salary(12000);
    $qq = new Employee("Habib",15);
    echo $qq->salary(15000);
     $qq->pp="PPPPPPP";
    echo $qq->pp;
    // echo Employee::tex , "<br>";
    // echo $emp->name,"<br>";
    // echo $emp->salary(15000),"<br>";
    // // $emp->test="Sylhet";
    // // echo $emp->test,"<br>";
    // // $emp->dd="Noakhali";
    // // echo $emp->dd , "<br>";
    //  $emp->dd="Noakha";
    // echo $emp->dd;



?>