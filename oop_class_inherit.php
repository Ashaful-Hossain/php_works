
<?php
    class cOne
    {
        public function add($a,$b) {
            return $ddd=$a+$b;
        }
        
        protected function div($m,$n) {
            return $m/$n;
            
        }
        private function mul($x,$y) {
                return $x*$y;
        }
        public function chek() {
            echo $this->mul(3,2),"<br>";
        }

    }

    class cTwo extends cOne
    {
        public function sum(){
            echo $this->add(5,4),"<br>";
        }
        public function div2() {
            echo $nn= $this->div(77,7),"<br>";
        }
        public function mul2() {
            echo $uu=$this->mul(3,2);
        }
    }
$dd = new cTwo();
$dd->sum();
$dd->div2();
// $dd->mul2();
$dd->chek();

?>