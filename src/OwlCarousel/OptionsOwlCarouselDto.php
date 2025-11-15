<?php

declare(strict_types=1);

namespace Vigihdev\Dto\OwlCarousel;

use Vigihdev\Contracts\ArrayableInterface;
use Vigihdev\Contracts\JsonableInterface;
use Vigihdev\Contracts\OwlCarousel\OptionsOwlCarouselInterface;

final class OptionsOwlCarouselDto implements OptionsOwlCarouselInterface, JsonableInterface, ArrayableInterface
{
    public function __construct(
        private readonly int|float $items,
        private readonly bool $loop = true,
        private readonly int $margin = 10,
        private readonly bool $nav = false,
        private readonly bool $dots = true,
        private readonly bool $autoplay = true,
        private readonly array $navText = [
            '<span class="material-icons-outlined ripple-effect" aria-hidden="true">arrow_back_ios</span>',
            '<span class="material-icons-outlined ripple-effect" aria-hidden="true">arrow_forward_ios</span>'
        ],
    ) {}

    public function getItems(): int|float
    {
        return $this->items;
    }

    public function getLoop(): bool
    {
        return $this->loop;
    }

    public function getMargin(): int
    {
        return $this->margin;
    }

    public function getNav(): bool
    {
        return $this->nav;
    }

    public function getDots(): bool
    {
        return $this->dots;
    }

    public function getAutoplay(): bool
    {
        return $this->autoplay;
    }

    public function getNavText(): array
    {
        return $this->navText;
    }

    public function toArray(): array
    {
        return [
            'items' => $this->items,
            'loop' => $this->loop,
            'margin' => $this->margin,
            'nav' => $this->nav,
            'dots' => $this->dots,
            'autoplay' => $this->autoplay,
            'navText' => $this->navText
        ];
    }

    public function toJson(int $options = 0): string
    {
        return json_encode($this->toArray(), $options);
    }
}
