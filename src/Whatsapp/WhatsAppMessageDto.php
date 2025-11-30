<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Whatsapp;

use Vigihdev\Contracts\Whatsapp\WhatsAppMessageInterface;
use Vigihdev\Dto\BaseDto;

/**
 * Class WhatsAppMessageDto
 *
 * DTO untuk menyimpan dan mengakses data pesan WhatsApp
 */
final class WhatsAppMessageDto extends BaseDto implements WhatsAppMessageInterface
{
    /**
     * Membuat instance objek WhatsAppMessageDto dengan parameter yang ditentukan
     *
     * @param string $phone Nomor telepon penerima pesan WhatsApp
     * @param string $text Konten teks dari pesan WhatsApp
     */
    public function __construct(
        private readonly string $phone,
        private readonly string $text
    ) {}

    /**
     * Mendapatkan nomor telepon dari pesan WhatsApp
     *
     * @return string Nomor telepon penerima
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Mendapatkan konten teks dari pesan WhatsApp
     *
     * @return string Konten teks pesan
     */
    public function getText(): string
    {
        return $this->text;
    }
}
