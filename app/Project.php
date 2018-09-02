<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'user_id', 'du_id', 'contractor', 'du_name', 'city', 'year', 'priority',
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
