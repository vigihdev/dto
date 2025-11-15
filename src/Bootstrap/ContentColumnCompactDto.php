<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Bootstrap;

use Vigihdev\Contracts\Bootstrap\ButtonActionInterface;
use Vigihdev\Contracts\Bootstrap\ContentColumnCompactInterface;

final class ContentColumnCompactDto implements ContentColumnCompactInterface
{

    public function __construct(
        private readonly string $title,
        private readonly string $description,
        private readonly ButtonActionDto $button
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getButton(): ButtonActionInterface
    {
        return $this->button;
    }
}
