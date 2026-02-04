<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{

    protected $filleable = ['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
