<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CategoryType extends Enum
{
    const farmanimals = 0;
    const companionanimals = 1;
    // const sanitation = 2;
    // const top = 3;

    public static function getDescription($value): string
	{
	    if ($value === self::farmanimals) {
	        return 'farm animals';
	    }

	    if ($value === self::companionanimals) {
	        return 'companion animals';
	    }

	    // if ($value === self::sanitation) {
	    //     return 'sanitation';
	    // }
	    // if ($value === self::top) {
	    //     return 'top';
	    // }
	    
	    return parent::getDescription($value);
	}
}
