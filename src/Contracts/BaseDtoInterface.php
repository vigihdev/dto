<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Contracts;

use Stringable;

interface BaseDtoInterface extends Stringable
{
    public function toArray(): array;

    public function toJson(int $flags = 0, int $depth = 512): string;
}
