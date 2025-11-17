<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Widgets;

use Vigihdev\Contracts\Widgets\ShareItInterface;
use Vigihdev\Dto\BaseDto;

final class ShareItDto extends BaseDto implements ShareItInterface
{

    public function __construct(
        private readonly string $name,
        private readonly string $iconUrl,
        private readonly string $shareUrl,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function getShareUrl(): string
    {
        return $this->shareUrl;
    }
}
