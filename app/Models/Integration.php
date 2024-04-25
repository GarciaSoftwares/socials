<?php

namespace App\Models;

use Database\Factories\IntegrationFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @method static \Database\Factories\IntegrationFactory factory($count = null, $state = [])
 * @method static Builder|Integration newModelQuery()
 * @method static Builder|Integration newQuery()
 * @method static Builder|Integration onlyTrashed()
 * @method static Builder|Integration query()
 * @method static Builder|Integration withTrashed()
 * @method static Builder|Integration withoutTrashed()
 * @mixin Eloquent
 */
class Integration extends Model
{
    use HasFactory;
    use SoftDeletes;
}
