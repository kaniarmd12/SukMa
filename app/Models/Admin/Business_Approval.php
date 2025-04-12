<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Business_Approval extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'sbn_owner_id', 'usr_id');
    }
}
