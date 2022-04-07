<?php

declare(strict_types=1);

// ここから下に回答を書こう！

for ($i = 1; ; $i++) {
    // == は使わないようにしよう
    if ($i % 15 === 0) {
        echo 'FizzBuzz';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    } else {
        echo $i;
    }

    // シングルクォートだと改行されないので注意
    echo "\n";
}
