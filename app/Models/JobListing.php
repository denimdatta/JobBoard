<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $title
 * @property string $location
 * @property string $currency_code
 * @property int $salary Salary in Low Denomination (Cent or Paisa
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $country_code
 * @property-read \App\Models\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing whereCurrencyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|JobListing whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class JobListing extends Model
{
    //
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_code', 'iso_code');
    }
}
