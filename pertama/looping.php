<?php 

$cont = 10;

for ($i = 1; $i <= $cont; $i++) {
    echo "Haloo ini looping ke " . $i;
    echo "<br>";
}

// array 

$names = ["Khasbi", "Syahidin","Rifki"];

// echo $names[1];

foreach ($names as $name) {
    echo $name;
    echo "<br>";
}

