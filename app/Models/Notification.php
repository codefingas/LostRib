<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    static $NOTIFICATION_TYPES = [
        'PROFILE_VIEW' => '',
        'INTEREST_ACCEPTED' => '',
        'NEW_MATCHES' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => ''
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
