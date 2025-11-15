<?php

declare(strict_types=1);

namespace Vigihdev\Dto\GoogleMaps;

use Vigihdev\Contracts\GoogleMaps\InfoWindowContentInterface;
use Vigihdev\CoreRender\BaseDto;

final class InfoWindowContentDto extends BaseDto implements InfoWindowContentInterface
{
    public function __construct(
        private readonly string $imageUrl,
        private readonly string $title,
        private readonly float|int $rating,
        private readonly int $jumlahUlasan
    ) {}

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): float|int
    {
        return $this->rating;
    }

    public function getJumlahUlasan(): int
    {
        return $this->jumlahUlasan;
    }
}
