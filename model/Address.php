<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id', 'address_line_1', 'address_line_2', 'city', 'state', 'country', 'postal_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}