<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Whatsapp;

use Vigihdev\Contracts\Whatsapp\WhatsAppSenderInterface;
use Vigihdev\Dto\BaseDto;

/**
 * Class WhatsAppSenderDto
 *
 * DTO untuk menyimpan dan mengakses data pengirim WhatsApp
 */
final class WhatsAppSenderDto extends BaseDto implements WhatsAppSenderInterface
{
    /**
     * Membuat instance objek WhatsAppSenderDto dengan parameter yang ditentukan
     *
     * @param string $phone Nomor telepon pengirim pesan WhatsApp
     * @param string $text Konten teks dari pesan WhatsApp
     * @param string $endpointUrl URL endpoint untuk mengirim pesan WhatsApp
     */
    public function __construct(
        private readonly string $phone,
        private readonly string $text,
        private readonly string $endpointUrl
    ) {}

    /**
     * Mendapatkan nomor telepon dari pengirim pesan WhatsApp
     *
     * @return string Nomor telepon pengirim
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

    /**
     * Mendapatkan URL endpoint untuk mengirim pesan WhatsApp
     *
     * @return string URL endpoint
     */
    public function getEndpointUrl(): string
    {
        return $this->endpointUrl;
    }
}
