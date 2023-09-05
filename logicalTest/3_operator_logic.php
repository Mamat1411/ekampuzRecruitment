<?php
function pembagianBilanganBulat($number1, $number2) : int {
    $result = 0;
    while ($number1 >= $number2) {
        $number1 -= $number2;
        $result++;
    }
    return $result;
}

echo "<h2>".pembagianBilanganBulat(7, 2)."</h2>";
?>