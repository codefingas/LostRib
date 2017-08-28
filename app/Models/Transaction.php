<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
