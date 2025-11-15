<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Vehicle;

use Vigihdev\Contracts\Vehicle\VehicleMultiHargaInterface;
use Vigihdev\CoreRender\BaseDto;

final class VehicleMultiHargaDto extends BaseDto implements VehicleMultiHargaInterface
{

    /**
     *
     * @param string $namaMobil
     * @param string $imageUrl
     * @param string $tipeMobil
     * @param string $actionUrl
     * @param VehicleCompactHargaDto[]|VehicleNotAvailableHarga[] $paketHargas
     * @return void
     */
    public function __construct(
        private readonly string $namaMobil,
        private readonly string $imageUrl,
        private readonly string $tipeMobil,
        private readonly string $actionUrl,
        private readonly array $paketHargas,
    ) {}

    public function getPaketHargas(): array
    {
        return $this->paketHargas;
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

    public function getActionUrl(): string
    {
        return $this->actionUrl;
    }
}
