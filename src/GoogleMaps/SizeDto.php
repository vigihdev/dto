<?php

declare(strict_types=1);

namespace Vigihdev\Dto\GoogleMaps;

use Vigihdev\Contracts\GoogleMaps\SizeInterface;
use Vigihdev\CoreRender\BaseDto;

final class SizeDto extends BaseDto implements SizeInterface
{
    public function __construct(
        private int $width,
        private int $height
    ) {}

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}
