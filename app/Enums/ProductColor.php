<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ProductColor extends Enum
{
    const WHITE = 'trắng';
    const BLUE = 'xanh';
    const YELLOW =  'vàng';
    const RED = 'đỏ';
    const PURPLE = 'tím';
    const BLACK = 'đen';
    const GREEN ='xanh lá';
}
