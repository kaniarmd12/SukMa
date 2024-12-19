<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory, SoftDeletes ;
    protected $primaryKey = 'odr_id';
    protected $guarded = [];

    const CREATED_AT = 'odr_created_at';
    const UPDATED_AT = 'odr_updated_at';
    const DELETED_AT = 'odr_deleted_at';

public function order()
    {
        return $this->belongsTo(order::class, 'odr_order_id', 'odr_id');
    }
}