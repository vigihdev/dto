<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Vehicle;

use Vigihdev\Contracts\Vehicle\VehicleCompactHargaInterface;
use Vigihdev\CoreRender\BaseDto;

final class VehicleCompactHargaDto extends BaseDto implements VehicleCompactHargaInterface
{

    public function __construct(
        private readonly int $harga,
        private readonly string $paketSewa,
    ) {
        // Validasi basic
        if ($harga < 0) {
            throw new \InvalidArgumentException('Harga tidak boleh negatif');
        }

        if (empty($paketSewa)) {
            throw new \InvalidArgumentException('Nama dan paket sewa wajib diisi');
        }
    }

    public function getHarga(): int
    {
        return $this->harga;
    }

    public function getPaketSewa(): string
    {
        return $this->paketSewa;
    }

    public function getHargaFormatted(): string
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }
}
