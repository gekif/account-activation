<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivationCode extends Model
{
    protected $fillable = ['code'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
