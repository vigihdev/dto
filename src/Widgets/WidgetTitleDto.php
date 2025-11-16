<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Widgets;

use Vigihdev\Contracts\Widgets\WidgetTitleInterface;
use Vigihdev\CoreRender\BaseDto;

final class WidgetTitleDto extends BaseDto implements WidgetTitleInterface
{

    public function __construct(
        private readonly string $name,
        private readonly string $title,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
