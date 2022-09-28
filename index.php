//Задание 1
<?php
$array1 = [1, 3, 5, 4, 9, 2, 1, 3, 7, 9];
$array2 = [2, 2, 3, 5, 8, 9, 2, 5, 1, 3];
 
$ar = array_map(function ($el1, $el2) {
    return $el1 * $el2;
},
$array1, $array2);
 
print_r($ar);

// Задание2

$name = readline("Привет, как тебя зовут? \n");
$array = [
$wishes = ['счастья', 'здоровья', 'успехов'],
$epithets = ['огромного','крепкого','больших']
];
$rand_keys = array_rand(0, count($array) - 1);

foreach($wishes as $ind1) {
    foreach($epithets as $ind2) {
        echo $array[$rand_keys] . " ";
       // echo $epithets[$rand_keys] . " ";
        echo "$name" . " ";
    }
};


