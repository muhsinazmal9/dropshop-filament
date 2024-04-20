<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;


enum UserStatus: int implements HasLabel, HasColor, HasIcon
{
    case ACTIVE = 1;
    case INACTIVE = 2;
    case BANNED = 3;


    public function getLabel(): ?string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
            self::BANNED => 'Banned',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::ACTIVE => 'success',
            self::INACTIVE => 'gray',
            self::BANNED => 'warning',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::ACTIVE => 'heroicon-m-check',
            self::INACTIVE => 'heroicon-m-x-mark',
            self::BANNED => 'heroicon-m-lock-closed',
        };
    }
}
