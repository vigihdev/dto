<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Widgets;

use Vigihdev\Contracts\Widgets\PostCardInterface;
use Vigihdev\Dto\BaseDto;

final class PostCardDto extends BaseDto implements PostCardInterface
{
    public function __construct(
        private readonly string $title,
        private readonly string $imageUrl,
        private readonly string $actionUrl,
        private readonly string $snippet
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getActionUrl(): string
    {
        return $this->actionUrl;
    }

    public function getSnippet(): string
    {
        return $this->snippet;
    }
}
