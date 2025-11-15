<?php

declare(strict_types=1);

namespace Vigihdev\Dto\GoogleMaps;

use Vigihdev\Contracts\GoogleMaps\LatLngInterface;
use Vigihdev\CoreRender\BaseDto;

final class LatLngDto extends BaseDto implements LatLngInterface
{
    public function __construct(
        private float $lat,
        private float $lng
    ) {}

    public function getLat(): float
    {
        return $this->lat;
    }

    public function getLng(): float
    {
        return $this->lng;
    }
}
