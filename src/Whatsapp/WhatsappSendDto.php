<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Whatsapp;

use Vigihdev\Contracts\Whatsapp\WhatsappSendInterface;
use Vigihdev\Dto\BaseDto;

final class WhatsappSendDto extends BaseDto implements WhatsappSendInterface
{


    public function __construct(
        private readonly string $imageUrl,
        private readonly string $contactNumber,
        private readonly string $username,
        private readonly string $message,
    ) {}

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getContactNumber(): string
    {
        return $this->contactNumber;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
