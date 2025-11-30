<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Vehicle;

use Vigihdev\Contracts\Bootstrap\ButtonActionInterface;
use Vigihdev\Contracts\Vehicle\VehicleCompactInterface;
use Vigihdev\Dto\BaseDto;
use Vigihdev\Dto\Bootstrap\ButtonActionDto;

/**
 * Class VehicleCompactDto
 *
 * DTO untuk menyimpan dan mengakses data kendaraan dalam format ringkas
 */
final class VehicleCompactDto extends BaseDto implements VehicleCompactInterface
{

    /**
     * Membuat instance objek VehicleCompactDto dengan parameter yang ditentukan
     *
     * @param string $namaMobil Nama dari mobil
     * @param string $imageUrl URL gambar mobil
     * @param string $tipeMobil Tipe dari mobil
     * @param ButtonActionDto $button Tombol aksi untuk mobil
     * @return void
     */
    public function __construct(
        private readonly string $namaMobil,
        private readonly string $imageUrl,
        private readonly string $tipeMobil,
        private readonly ButtonActionInterface $button
    ) {}

    /**
     * Mendapatkan tombol aksi dari mobil
     *
     * @return ButtonActionInterface Tombol aksi
     */
    public function getButtonAction(): ButtonActionInterface
    {
        return $this->button;
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