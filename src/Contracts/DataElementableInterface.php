<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Contracts;


interface DataElementableInterface
{
    public function toDataElement(): array;
}
