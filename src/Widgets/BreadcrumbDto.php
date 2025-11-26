<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Widgets;

use Vigihdev\Contracts\Widgets\BreadcrumbInterface;
use Vigihdev\Dto\BaseDto;

final class BreadcrumbDto extends BaseDto implements BreadcrumbInterface
{


    public function __construct(
        private readonly string $url,
        private readonly string $title,
        private readonly string $label,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getLabel(): string
    {
        return $this->label;
    }
}
