<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property  int          $id
 * @property  string       $title
 * @property  string       $location
 * @property  string       $currency_code
 * @property  int          $salary         Salary in Low Denomination (Cent or Paisa
 * @property  Carbon|null  $created_at
 * @property  Carbon|null  $updated_at
 * @property  string       $country_code
 * @property-read Country $country
 *
 * @method  static  Builder<static>|JobListing  newModelQuery()
 * @method  static  Builder<static>|JobListing  newQuery()
 * @method  static  Builder<static>|JobListing  query()
 * @method  static  Builder<static>|JobListing  whereCountryCode($value)
 * @method  static  Builder<static>|JobListing  whereCreatedAt($value)
 * @method  static  Builder<static>|JobListing  whereCurrencyCode($value)
 * @method  static  Builder<static>|JobListing  whereId($value)
 * @method  static  Builder<static>|JobListing  whereLocation($value)
 * @method  static  Builder<static>|JobListing  whereSalary($value)
 * @method  static  Builder<static>|JobListing  whereTitle($value)
 * @method  static  Builder<static>|JobListing  whereUpdatedAt($value)
 *
 * @mixin Eloquent
 */
class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'currency_code',
        'salary',
        'country_code',
    ];

    /**
     * Defines the relationship between the JobListing and the Company model.
     *
     * @return  BelongsTo  Relationship instance pointing to the Company model
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company', 'name');
    }

    /**
     * Defines the relationship between the JobListing and the Country model.
     *
     * @return  BelongsTo  Relationship instance pointing to the Country model
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_code', 'iso_code');
    }
}
