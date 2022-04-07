<?php

declare(strict_types=1);

// ここから下に回答を書こう！

function upper_only_first(array $strings): array
{
    return array_map(
        // クロージャーの型も忘れずに書こう
        function (string $string): string {
            $lower = strtolower($string);
            return ucfirst($lower);
        },
        $strings
    );
}

// テスト用コード
var_dump(upper_only_first(['APPLE', 'banana', 'Carrot']));
