<?php
for ($i=1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i. " FooBar <br>";
    } elseif ($i % 5 == 0) {
        echo $i. " Bar <br>";
    } elseif ($i % 3 == 0) {
        echo $i. " Foo <br>";
    } else {
        echo $i."<br>";
    }
}
?>