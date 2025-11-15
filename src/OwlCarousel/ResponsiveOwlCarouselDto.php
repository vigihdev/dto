<?php

declare(strict_types=1);

namespace Vigihdev\Dto\OwlCarousel;

use Vigihdev\Contracts\ArrayableInterface;
use Vigihdev\Contracts\JsonableInterface;
use Vigihdev\Contracts\OwlCarousel\OptionsOwlCarouselInterface;
use Vigihdev\Contracts\OwlCarousel\ResponsiveOwlCarouselInterface;

final class ResponsiveOwlCarouselDto implements ResponsiveOwlCarouselInterface, ArrayableInterface, JsonableInterface
{
    private array $breakpoints = [];

    private function __construct() {}

    public static function create(): static
    {
        return new static();
    }

    public function addBreakpoint(int $width, OptionsOwlCarouselInterface $options): static
    {
        $this->breakpoints[$width] = $options->toArray();
        ksort($this->breakpoints);
        return $this;
    }

    public function xs(OptionsOwlCarouselInterface $options): static
    {
        return $this->addBreakpoint(0, $options);
    }

    public function sm(OptionsOwlCarouselInterface $options): static
    {
        return $this->addBreakpoint(576, $options);
    }

    public function md(OptionsOwlCarouselInterface $options): static
    {
        return $this->addBreakpoint(768, $options);
    }

    public function lg(OptionsOwlCarouselInterface $options): static
    {
        return $this->addBreakpoint(992, $options);
    }

    public function xl(OptionsOwlCarouselInterface $options): static
    {
        return $this->addBreakpoint(1200, $options);
    }

    public function xxl(OptionsOwlCarouselInterface $options): static
    {
        return $this->addBreakpoint(1400, $options);
    }

    public function toArray(): array
    {
        return $this->breakpoints;
    }

    public function toJson(int $options = 0): string
    {
        return json_encode($this->toArray(), JSON_FORCE_OBJECT | $options);
    }

    /**
     * Get all breakpoints
     */
    public function getBreakpoints(): array
    {
        return $this->breakpoints;
    }

    /**
     * Check if breakpoint exists
     */
    public function hasBreakpoint(int $width): bool
    {
        return isset($this->breakpoints[$width]);
    }

    /**
     * Get specific breakpoint
     */
    public function getBreakpoint(int $width): ?array
    {
        return $this->breakpoints[$width] ?? null;
    }

    /**
     * Remove breakpoint
     */
    public function removeBreakpoint(int $width): static
    {
        unset($this->breakpoints[$width]);
        return $this;
    }

    /**
     * Clear all breakpoints
     */
    public function clear(): static
    {
        $this->breakpoints = [];
        return $this;
    }

    /**
     * Get breakpoints count
     */
    public function count(): int
    {
        return count($this->breakpoints);
    }
}
