<?php
echo "Odd numbers between 1 and 10:\n";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 !== 0) {
        echo $i, "\n";
    }
}
?>
