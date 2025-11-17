<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Widgets;

use Vigihdev\Contracts\Widgets\FeatureItemInterface;
use Vigihdev\Dto\BaseDto;

final class FeatureItemDto extends BaseDto implements FeatureItemInterface
{
    public function __construct(
        private readonly string $title,
        private readonly string $iconUrl,
        private readonly string $description
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
