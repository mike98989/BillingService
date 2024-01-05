<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Billing
 *
 * @property int $id
 * @property int $user_id
 * @property string $amount
 * @property string $balance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Billing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Billing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Billing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereUserId($value)
 * @mixin \Eloquent
 */
class Billing extends Model
{
    use HasFactory;

    protected $table="billing";
}
