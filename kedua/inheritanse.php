<?php 

// public , private , protected

class Employee{
    protected $name;
}

class Programmer extends Employee{
    public $language;

    public function __construct($name, $language){
        $this->name = $name;
        $this->language = $language;
    }

    public function setProperty($name, $language){
        $this->name = $name;
        $this->language = $language;
    }


    public function ambilNama(){
        return $this->name;
    }
}

$khasbi = new Programmer("Khasbi", "PHP");

$khasbi->setProperty("Rifqi", "PHP");

echo $khasbi->ambilNama();
