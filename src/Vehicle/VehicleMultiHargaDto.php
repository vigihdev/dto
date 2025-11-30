<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Vehicle;

use Vigihdev\Contracts\Bootstrap\ButtonActionInterface;
use Vigihdev\Contracts\Vehicle\VehicleMultiHargaInterface;
use Vigihdev\Dto\Bootstrap\ButtonActionDto;
use Vigihdev\Dto\BaseDto;

/**
 * Class VehicleMultiHargaDto
 *
 * DTO untuk menyimpan dan mengakses data harga kendaraan dengan berbagai paket
 */
final class VehicleMultiHargaDto extends BaseDto implements VehicleMultiHargaInterface
{

    /**
     * Membuat instance objek VehicleMultiHargaDto dengan parameter yang ditentukan
     *
     * @param string $namaMobil Nama dari mobil
     * @param string $imageUrl URL gambar mobil
     * @param string $tipeMobil Tipe dari mobil
     * @param VehicleCompactHargaDto[]|VehicleNotAvailableHarga[] $paketHargas Daftar paket harga kendaraan
     * @param ButtonActionDto|ButtonActionInterface $button Tombol aksi untuk kendaraan
     */
    public function __construct(
        private readonly string $namaMobil,
        private readonly string $imageUrl,
        private readonly string $tipeMobil,
        private readonly array $paketHargas,
        private readonly ButtonActionInterface $button

    ) {}

    /**
     * Mendapatkan tombol aksi untuk kendaraan
     *
     * @return ButtonActionDto Tombol aksi
     */
    public function getButtonAction(): ButtonActionInterface
    {
        return $this->button;
    }

    /**
     * Mendapatkan daftar paket harga kendaraan
     *
     * @return VehicleCompactHargaDto[]|VehicleNotAvailableHarga[] Daftar paket harga
     */
    public function getPaketHargas(): array
    {
        return $this->paketHargas;
    }

    /**
     * Mendapatkan nama mobil
     *
     * @return string Nama mobil
     */
    public function getNamaMobil(): string
    {
        return $this->namaMobil;
    }

    /**
     * Mendapatkan URL gambar mobil
     *
     * @return string URL gambar
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * Mendapatkan tipe mobil
     *
     * @return string Tipe mobil
     */
    public function getTipeMobil(): string
    {
        return $this->tipeMobil;
    }
}