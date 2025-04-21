<?php

declare(strict_types=1);

namespace App;

final class Example
{
    public function do(): int
    {
        // Psalm verification
        /** @psalm-var non-empty-string $foo */
        $foo = "";
        /** @psalm-check-type $bar = int */
        $bar = "not-an-int"; // Checked variable $bar = int does not match $bar = 'not-an-int'
        echo $bar;

        return 42;
    }
}
