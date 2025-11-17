<?php

declare(strict_types=1);

namespace Vigihdev\Dto\OwlCarousel;

use Vigihdev\Contracts\OwlCarousel\ImageSliderOwlCarouselInterface;

final class ImageSliderOwlCarouselDto implements ImageSliderOwlCarouselInterface
{
    public function __construct(
        private readonly string $name,
        private readonly string $imageUrl,
    ) {}

    /**
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}
