<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Company extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'phone', 'house_number', 'zip_code', 'street', 'city_id', 'user_id'];

    /**
     * A company belongs to a city.
     *
     * @return BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * A company belongs to a user.
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * A company operates in many cities.
     *
     * @return BelongsToMany
     */
    public function cities()
    {
        return $this->belongsToMany(City::class)->withTimestamps();
    }

    /**
     * A company operates in many categories.
     *
     * @return BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

}
