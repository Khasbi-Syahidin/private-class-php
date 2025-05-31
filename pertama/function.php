<?php


// fungsi

// kode program yang akan menjalankan aksi yang ada kode bloknya

// echo "Haloo" . "Khasbi ";

// echo "<br>";

// echo "Umur Kamu" . 20;

// function say_hello($name = "Person", $age = 0)
// {
//     echo "haloo " . $name . " umur kamu " . $age;
// }

// say_hello("Khasbi", 20);
// say_hello();

// callback function

function say_hello2($name, $age, $callback)
{
    echo "haloo " . $name . " umur kamu " . $age;
    $callback();
}

say_hello2("Khasbi", 20, function () {
    echo "<br>";
    echo "ini callback function";
});