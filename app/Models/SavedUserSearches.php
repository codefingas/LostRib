<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SavedUserSearches extends Model
{
    public function getOwner()
    {
        return $this->belongsTo(User::class);
    }

    public function saveSearch(Request $request)
    {
        
    }
}
