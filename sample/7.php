<?php

declare(strict_types=1);

$input1 = [1, 2];
$input2 = ['a', 'b'];

/*
 * $result = cross_join($input1, $input2);
 * var_dump($result);
 *
 * [
 *   [1, 'a'],
 *   [1, 'b'],
 *   [2, 'a'],
 *   [2, 'b'],
 * ]
 *
 */

// ここから下に回答を書こう！

function cross_join(array $input1, array $input2): array
{
    $result = [];
    foreach ($input1 as $input1Value) {
        foreach ($input2 as $input2Value) {
            $result[] = [$input1Value, $input2Value];
        }
    }

    return $result;
}

// テスト用コード

$result = cross_join($input1, $input2);
var_dump($result);
