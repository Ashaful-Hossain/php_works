<?php
class Employee
{
    public $name;
    public $basic;
    public $house_rent;

    public function __construct($a,$b,$c) {
        $this->name=$a;
        $this->basic=$b;
        $this->house_rent=$c;
    }

    // public function set_name($a) {
    //         $this->name=$a;
    // }
    // public function set_basic($a) {
    //         $this->basic=$a;
    // }
    // public function set_rent($a) {
    //         $this->house_rent=$a;
    // }
    public function salary() {
        echo "Name : ".$this->name."<br>Basic : ".$this->basic."<br>House Rent : ".$this->house_rent."<br>Total Salary : ".$this->basic+($this->basic*$this->house_rent)/100;
        echo "<hr>";
    }
}

    class Pension extends Employee
{           
    function __construct($a,$b,$c) {
        parent::__construct($a,$b,$c);
    }
    function s() {
        $this->salary();
    }

}
        $rr=new Pension("Gafur",17000,5);
        echo $rr->s();
        $rr=new Pension("Gafur",17000,5);
        echo $rr->s();
        $rr=new Pension("Gafur",17000,5);
        echo $rr->s();


 
    // $data = new Employee("Karim",13000,5);
    // $data->salary();
    // $data = new Employee("Rahim",15000,5);
    // $data->salary();
    // $data = new Employee("Habib",17000,5);
    // $data->salary();


    // $data = new Employee();
    // $data->set_name("Karim");
    // $data->set_basic(12000);
    // $data->set_rent(5);
    // $data->salary();

    // $data1 = new Employee();
    // $data1->set_name("Habib");
    // $data1->set_basic(15000);
    // $data1->set_rent(5);
    // $data1->salary();


?>