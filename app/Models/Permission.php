<?php

namespace App\Models;

use App\Traits\MorphMapTrait;
use App\Traits\UUID;
use Spatie\Permission\Models\Permission as BaseModel;

class Permission extends BaseModel
{
    use UUID;
    use MorphMapTrait;
}
