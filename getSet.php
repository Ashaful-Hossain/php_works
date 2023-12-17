<?php
    class Employee{

        public function __set($nam,$valu){
                return $this->$nam=$valu;
        }

        public function __get($nam) {
            return $this->$nam;
        }

        public function test(){
                echo "OK";
        }
    }

    $data = new Employee();
    //   $data -> test();
    
    $data -> name="Karim";
    $data -> name="Karim";
    $data -> salary= 15000;
    echo $data->salary;

?>