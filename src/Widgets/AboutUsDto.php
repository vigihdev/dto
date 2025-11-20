<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Widgets;

use Vigihdev\Contracts\Widgets\AboutUsInterface;
use Vigihdev\Dto\BaseDto;

final class AboutUsDto extends BaseDto implements AboutUsInterface
{


    public function __construct(
        private readonly string $logoUrl,
        private readonly string $description,
    ) {}

    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
