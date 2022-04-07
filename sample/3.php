<?php

declare(strict_types=1);

// ここから下に回答を書こう！

// 型を忘れずに書こう
function all_in_array(array $needles, array $haystack): bool
{
    foreach ($needles as $needle) {
        // in_array() を使うときは必ず第3引数に true を指定しよう
        if (!in_array($needle, $haystack, true)) {
            return false;
        }
    }

    return true;
}

// テスト用コード
$haystack = [1, 2, 3];

echo all_in_array([1], $haystack) ? 'OK' : 'NG';
echo all_in_array([1, 3], $haystack) ? 'OK' : 'NG';

echo all_in_array([4], $haystack) ? 'NG' : 'OK';
echo all_in_array([1, 4], $haystack) ? 'NG' : 'OK';
