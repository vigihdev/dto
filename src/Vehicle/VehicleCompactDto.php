<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Vehicle;

use Vigihdev\Contracts\Bootstrap\ButtonActionInterface;
use Vigihdev\Contracts\Vehicle\VehicleCompactInterface;
use Vigihdev\Dto\BaseDto;
use Vigihdev\Dto\Bootstrap\ButtonActionDto;

final class VehicleCompactDto extends BaseDto implements VehicleCompactInterface
{

    /**
     *
     * @param string $namaMobil
     * @param string $imageUrl
     * @param string $tipeMobil
     * @param ButtonActionDto $button
     * @return void
     */
    public function __construct(
        private readonly string $namaMobil,
        private readonly string $imageUrl,
        private readonly string $tipeMobil,
        private readonly ButtonActionInterface $button
    ) {}

    public function getButtonAction(): ButtonActionInterface
    {
        return $this->button;
    }

    public function getNamaMobil(): string
    {
        return $this->namaMobil;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getTipeMobil(): string
    {
        return $this->tipeMobil;
    }
}
