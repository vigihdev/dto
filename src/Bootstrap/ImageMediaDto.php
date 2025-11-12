<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Bootstrap;

use Vigihdev\Contracts\Bootstrap\ImageMediaInterface;

class ImageMediaDto implements ImageMediaInterface
{
    public function __construct(
        private readonly string $imageUrl
    ) {}

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}
