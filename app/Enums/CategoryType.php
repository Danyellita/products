<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class CategoryType extends Enum
{
    const farmanimals = 0;
    const companionanimals = 1;
    
    public static function getDescription($value): string
	{
	    if ($value === self::farmanimals) {
	        return 'farm animals';
	    }

	    if ($value === self::companionanimals) {
	        return 'companion animals';
	    }

	    return parent::getDescription($value);
	}
}
