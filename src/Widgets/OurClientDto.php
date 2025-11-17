<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Widgets;

use Vigihdev\Contracts\Widgets\OurClientInterface;
use Vigihdev\Dto\BaseDto;

final class OurClientDto extends BaseDto implements OurClientInterface
{

    public function __construct(
        private readonly string $name,
        private readonly string $imageUrl
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}
