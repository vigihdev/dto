<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Bootstrap;

use Vigihdev\Contracts\Bootstrap\NavBarTogglerInterface;
use Vigihdev\Dto\BaseDto;

final class NavBarTogglerDto extends BaseDto implements NavBarTogglerInterface
{

    public function __construct(
        protected string $content,
        protected array $options = [],
    ) {}

    public function getContent(): string
    {
        return $this->content;
    }
    public function getOptions(): array
    {
        return $this->options;
    }
}
