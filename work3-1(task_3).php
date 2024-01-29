<?php
$a = 2;
$b = 4;
$c = 3;

if ($a == $b || $a == $c || $b == $c) {
    echo "Ошибка";
} else {
    $average = ($a + $b + $c) / 3;
    echo "Среднее число: с = " . $c;
}
?>