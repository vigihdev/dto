<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Bootstrap;

use Vigihdev\Contracts\Bootstrap\NavBarBrandInterface;
use Vigihdev\Dto\BaseDto;

final class NavBarBrandDto extends BaseDto implements NavBarBrandInterface
{

    public function __construct(
        protected string $imageUrl,
        protected array $options = [],
    ) {}

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
