<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Widgets;

use Vigihdev\Contracts\Widgets\WalkerMenuInterface;
use Vigihdev\Dto\BaseDto;

final class WalkerMenuDto extends BaseDto implements WalkerMenuInterface
{


    public function __construct(
        private readonly string $name,
        private readonly string $menu_class = 'navbar-nav',
        private readonly string $menu_id = '',
        private readonly string $container = 'nav',
        private readonly string $container_class = 'navbar navbar-expand-lg',
        private readonly string $container_id = '',
        private readonly string $container_aria_label = 'Main navigation',
        private readonly string $before = '',
        private readonly string $after = '',
        private readonly string $link_before = '',
        private readonly string $link_after = '',
        private readonly bool $echo = false,
        private readonly int $depth = 0,
        private readonly string $theme_location = '',
        private readonly string $items_wrap = '<ul id="%1$s" class="%2$s">%3$s</ul>',
        private readonly string $item_spacing = 'preserve'
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getMenuClass(): string
    {
        return $this->menu_class;
    }

    public function getMenuId(): string
    {
        return $this->menu_id;
    }

    public function getContainer(): string
    {
        return $this->container;
    }

    public function getContainerClass(): string
    {
        return $this->container_class;
    }

    public function getContainerId(): string
    {
        return $this->container_id;
    }

    public function getContainerAriaLabel(): string
    {
        return $this->container_aria_label;
    }

    public function getBefore(): string
    {
        return $this->before;
    }

    public function getAfter(): string
    {
        return $this->after;
    }

    public function getLinkBefore(): string
    {
        return $this->link_before;
    }

    public function getLinkAfter(): string
    {
        return $this->link_after;
    }

    public function getEcho(): bool
    {
        return $this->echo;
    }

    public function getDepth(): int
    {
        return $this->depth;
    }

    public function getThemeLocation(): string
    {
        return $this->theme_location;
    }

    public function getItemsWrap(): string
    {
        return $this->items_wrap;
    }

    public function getItemSpacing(): string
    {
        return $this->item_spacing;
    }
}
