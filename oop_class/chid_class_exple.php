<?php
    class Employee
    {
        public $name;
      public function __construct($d){
            $this->name=$d;
        }
        public function address() {
             echo $this->name="Karim";
        }
    }

class Test extends Employee
    {
        function __construct(){
            parent::__construct("Mamun");
        }
    }
    var_dump ($dd=new Test());
    // echo ($dd=new Test());



?>