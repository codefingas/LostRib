<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function addInterest($target)
    {
        $this->source_id = Auth::id();
        $this->target_id =$target;
        $this->save();
    }
}
