<?php

namespace App\Enums;

enum SizeEnum: string {
    case Tiny = 'Tiny';
    case Small = 'Small';
    case MediumOrSmall = 'Medium or Small';
    case Medium = 'Medium';
    case Large = 'Large';
    case Huge = 'Huge';
    case Gargantuan = 'Gargantuan';

    public static function values(): array {
        return array_column(self::cases(), 'name', "value");
    }
}