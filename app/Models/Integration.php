<?php

namespace App\Models;

use App\Models\Enums\IntegrationStatusEnum as StatusEnum;
use Database\Factories\IntegrationFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $key
 * @property string|null $description
 * @property StatusEnum $status
 * @property string|null $logo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static \Database\Factories\IntegrationFactory factory($count = null, $state = [])
 * @method static Builder|Integration newModelQuery()
 * @method static Builder|Integration newQuery()
 * @method static Builder|Integration onlyTrashed()
 * @method static Builder|Integration query()
 * @method static Builder|Integration whereCreatedAt($value)
 * @method static Builder|Integration whereDeletedAt($value)
 * @method static Builder|Integration whereDescription($value)
 * @method static Builder|Integration whereId($value)
 * @method static Builder|Integration whereKey($value)
 * @method static Builder|Integration whereLogo($value)
 * @method static Builder|Integration whereName($value)
 * @method static Builder|Integration whereStatus($value)
 * @method static Builder|Integration whereUpdatedAt($value)
 * @method static Builder|Integration withTrashed()
 * @method static Builder|Integration withoutTrashed()
 * @mixin Eloquent
 */
class Integration extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'status' => StatusEnum::class
    ];
}
