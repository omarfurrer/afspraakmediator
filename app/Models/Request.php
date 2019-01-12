<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Enums\RequestStatuses;

class Request extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'are_all_parties_behind_mediation', 'description', 'city_id', 'city_text',
        'contact_phone', 'user_id', 'status', 'comission'];

    /**
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'are_all_parties_behind_mediation' => 'boolean',
        'comission' => 'float'
    ];

    /**
     * A request belongs to a category.
     *
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * A request belongs to a city.
     *
     * @return BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * A request belongs to a user.
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get request status.
     * 
     * @return String
     */
    public function getStatus()
    {
        return RequestStatuses::StringKeyByvalue($this->status);
    }

}
