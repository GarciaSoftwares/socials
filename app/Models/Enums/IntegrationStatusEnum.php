<?php

namespace App\Models\Enums;

use App\Utils\Traits\EnumToArray;

enum IntegrationStatusEnum: string
{
    use EnumToArray;

    case ACTIVE = 'active';

    case INACTIVE = 'inactive';

    case DEVELOPMENT = 'development';
}
