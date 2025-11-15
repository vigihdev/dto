<?php

declare(strict_types=1);

namespace Vigihdev\Dto\GoogleMaps;

use Vigihdev\Contracts\GoogleMaps\InfoWindowInterface;
use Vigihdev\Contracts\GoogleMaps\LatLngInterface;
use Vigihdev\Contracts\GoogleMaps\SizeInterface;
use Vigihdev\CoreRender\BaseDto;

final class InfoWindowDto extends BaseDto implements InfoWindowInterface
{

    /**
     *
     * @param string $ariaLabel
     * @param string $content
     * @param bool $disableAutoPan
     * @param string $headerContent
     * @param bool $headerDisabled
     * @param int $maxWidth
     * @param int $minWidth
     * @param SizeDto $pixelOffset
     * @param LatLngDto $position
     * @param int $zIndex
     * @return void
     */
    public function __construct(
        private SizeInterface $pixelOffset,
        private LatLngInterface $position,
        private string $ariaLabel = '',
        private ?string $content = null,
        private bool $disableAutoPan = false,
        private string $headerContent = '',
        private bool $headerDisabled = true,
        private int $maxWidth = 0,
        private int $minWidth = 0,
        private int $zIndex = 0
    ) {}

    public function getAriaLabel(): string
    {
        return $this->ariaLabel;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function isDisableAutoPan(): bool
    {
        return $this->disableAutoPan;
    }

    public function getHeaderContent(): string
    {
        return $this->headerContent;
    }

    public function isHeaderDisabled(): bool
    {
        return $this->headerDisabled;
    }

    public function getMaxWidth(): int
    {
        return $this->maxWidth;
    }

    public function getMinWidth(): int
    {
        return $this->minWidth;
    }

    public function getPixelOffset(): SizeInterface
    {
        return $this->pixelOffset;
    }

    public function getPosition(): LatLngInterface
    {
        return $this->position;
    }

    public function getZIndex(): int
    {
        return $this->zIndex;
    }
}
