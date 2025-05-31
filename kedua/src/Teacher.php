<?php 

namespace App;

use App\User;
class Teacher extends User {
    protected $job; 
    protected $usia;

    public function __construct($name, $job, $usia){
        parent::__construct($name);
        $this->job = $job;
        $this->usia = $usia;
    }


    public function mengajar(){
        echo $this->name . " sedang mengajar " . $this->job;
    }
}