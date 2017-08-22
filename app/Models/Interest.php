<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    //

    public function initiatingUser()
    {
        return $this->belongsTo(User::class, 'source_id');
    }

    public function targetedUser()
    {
        return $this->belongsTo(User::class, 'target_id');
    }
}
