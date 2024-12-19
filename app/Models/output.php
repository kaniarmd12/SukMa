<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class output extends Model
{
    use HasFactory, SoftDeletes ;
    protected $primaryKey = 'otp_id';
    protected $guarded = [];

    const CREATED_AT = 'otp_created_at';
    const UPDATED_AT = 'otp_updated_at';
    const DELETED_AT = 'otp_deleted_at';

public function output()
    {
        return $this->belongsTo(order::class, 'otp_output_id', 'otp_id');
    }
}