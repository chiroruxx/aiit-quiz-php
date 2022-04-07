<?php

declare(strict_types=1);

// ここから下に回答を書こう！

// 小数は double ではないので注意しよう
function divide(float $dividend, float $divisor): float
{
    if ($divisor === 0.0) {
        throw new Exception('ゼロ除算はできません。');
    }

    return $dividend / $divisor;
}

// テスト用コード
echo divide(3.0, 2.0); // 1.5
echo divide(0.0, 2.0); // 0

try {
    echo divide(3.0, 0.0); // exception
} catch (Exception $e) {
    echo $e->getMessage();
}
