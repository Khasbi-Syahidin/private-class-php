<?php 


// prosedural 

// variable
$name = "Khasbi"; 

// opp
// kita ingin simpan data nama dengan objek person

class Person {
    public $name; 
}

// fungsi atau fungsion

function sayHello() {
    echo "Hello "; 
}

// buat objek motor 


class Motor {
    public $seri;
    public $merk;
    public $cc;
    
    public function __construct($seri, $merk, $cc){
        $this->seri = $seri;
        $this->merk = $merk;
        $this->cc = $cc;
    }

        // public function __destruct(){
        //     echo "Objek Dihapus";
        // }

    public function run(){
        echo "Motor $this->seri". " dengan merk " . " $this->merk dengan CC $this->cc sedang berjalan";
    }
}


// destructer


$vario125 = new Motor("Vario 125", "Honda", "125");
// $vario125->seri = "Vario 125";
// $vario125->merk = "Honda";
// $vario125->cc = "125";\
$vario125->run();
echo "<br>";

// unset($vario125); // menghapus objek


