<?php

    class fileHandle{
        // public $salary= 15000;
        public $con;
        public function __construct($file_address,$mode) {
            $this->con = fopen($file_address,$mode);
        } 
        // public function file_open($file_address,$mode) {
        //     $this->con = fopen($file_address,$mode);
        // } 
        
        public function file_read() {  
            $data = fgetcsv($this->con);
            return $data;
            
        } 
       
    }  
    $file =new fileHandle('features.csv','r');
    // var_dump($file->con);
    // $file->file_open('features.csv','r');
    $d = $file->file_read();
    echo "<pre>";
    print_r($d);
?>