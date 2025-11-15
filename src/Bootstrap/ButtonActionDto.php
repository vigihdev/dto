<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Bootstrap;

use Vigihdev\Contracts\Bootstrap\ButtonActionInterface;

final class ButtonActionDto implements ButtonActionInterface
{
    public function __construct(
        private readonly string $url,
        private readonly string $label,
        private readonly array $options = []
    ) {}

    public function getOptions(): array
    {
        return $this->options;
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
