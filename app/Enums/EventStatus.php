<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class EventStatus extends Enum
{
    const POST_PONE =   0;//tạm hoãn
    const IS_HAPPENNNG =   1;//đang diễn ra
    const UP_COMING = 2;//sắp diễn ra
    const TAKE_PLACE = 3;//đã diễn ra
}
