<?php

namespace App\Models;

use Database\Factories\TagFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

/**
 * @property  int          $id
 * @property  string       $name
 * @property  Carbon|null  $created_at
 * @property  Carbon|null  $updated_at
 * @property-read Collection<int, JobListing> $jobs
 * @property-read int|null $jobs_count
 *
 * @method  static  TagFactory           factory($count = null, $state = [])
 * @method  static  Builder<static>|Tag  newModelQuery()
 * @method  static  Builder<static>|Tag  newQuery()
 * @method  static  Builder<static>|Tag  query()
 * @method  static  Builder<static>|Tag  whereCreatedAt($value)
 * @method  static  Builder<static>|Tag  whereId($value)
 * @method  static  Builder<static>|Tag  whereName($value)
 * @method  static  Builder<static>|Tag  whereUpdatedAt($value)
 *
 * @mixin Eloquent
 */
class Tag extends Model
{
    /** @use HasFactory<TagFactory> */
    use HasFactory;

    /**
     * Defines the relationship between the Tag and the JobListing model.
     *
     * @return  BelongsToMany<JobListing>  Relationship instance pointing to the JobListing model
     */
    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(JobListing::class);
    }
}
