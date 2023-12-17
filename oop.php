<?php

class Employee {

        public $salary = 15000;
        private $bonus = 5000;

    function add($x,$y) {
        $z = $x+$y;
        return $z;
    }

    function fact($num) {
        $fact=1;
        for($i=1; $i<=$num; $i++){
                $fact*=$i;
            }
            return $fact;
    }

}

?>