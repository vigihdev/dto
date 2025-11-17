<?php

declare(strict_types=1);

namespace Vigihdev\Dto\GoogleMaps;

use Vigihdev\Contracts\GoogleMaps\InfoWindowInterface;
use Vigihdev\Contracts\GoogleMaps\LatLngInterface;
use Vigihdev\Contracts\GoogleMaps\MapsInterface;
use Vigihdev\Contracts\GoogleMaps\MarkerInterface;
use Vigihdev\Dto\BaseDto;

final class MapsDto extends BaseDto implements MapsInterface
{
    /**
     *
     * @param int $zoom
     * @param bool $mapTypeControl
     * @param bool $fullscreenControl
     * @param bool $panControl
     * @param bool $scaleControl
     * @param ?LatLngDto $center
     * @param ?MarkerDto $marker
     * @param string $style
     * @param InfoWindowDto $infoWindow
     * @return void
     */
    public function __construct(
        private int $zoom = 17,
        private bool $mapTypeControl = false,
        private bool $fullscreenControl = false,
        private bool $panControl = false,
        private bool $scaleControl = false,
        private ?LatLngInterface $center = null,
        private ?MarkerInterface $marker = null,
        private string $style = '',
        private ?InfoWindowInterface $infoWindow = null
    ) {}

    public function getZoom(): int
    {
        return $this->zoom;
    }

    public function isMapTypeControl(): bool
    {
        return $this->mapTypeControl;
    }

    public function isFullscreenControl(): bool
    {
        return $this->fullscreenControl;
    }

    public function isPanControl(): bool
    {
        return $this->panControl;
    }

    public function isScaleControl(): bool
    {
        return $this->scaleControl;
    }

    public function getCenter(): LatLngDto
    {
        return $this->center;
    }

    public function getMarker(): MarkerDto
    {
        return $this->marker;
    }

    public function getStyle(): string
    {
        return $this->style;
    }

    public function getInfoWindow(): InfoWindowInterface
    {
        return $this->infoWindow;
    }
}
