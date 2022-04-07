<?php

declare(strict_types=1);

// ここから下に回答を書こう！

class EmailAddress
{
    // PHP8.1 の場合、 readonly キーワードが使用できる
    private readonly string $user;
    private readonly string $host;

    public function __construct(string $address)
    {
        $exploded = explode('@', $address);

        if (count($exploded) !== 2 || $exploded[0] === '' || $exploded[1] === '') {
            throw new InvalidArgumentException('メールアドレスが不正です。');
        }

        /*
         * 以下と同じ意味。
         * $this->user = $exploded[0];
         * $this->>host = $exploded[1];
         */
        [$this->user, $this->host] = $exploded;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getHost(): string
    {
        return $this->host;
    }
}

// テスト用コード

$address = new EmailAddress('test@example.com');
echo $address->getUser(); // test
echo "\n";
echo $address->getHost(); // example.com
echo "\n";

// @がない
try {
    $address = new EmailAddress('Invalid address');
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
echo "\n";

// ユーザー部がない
try {
    $address = new EmailAddress('@example.com');
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

// ホスト部がない
echo "\n";
try {
    $address = new EmailAddress('test@');
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
