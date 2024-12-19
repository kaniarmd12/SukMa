<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class bussines extends Model
{
    use HasFactory, SoftDeletes ;
    protected $primaryKey = 'bsn_id';
    protected $guarded = [];

    const CREATED_AT = 'bsn_created_at';
    const UPDATED_AT = 'bsn_updated_at';
    const DELETED_AT = 'bsn_deleted_at';

public function bussines()
    {
        return $this->belongsTo(bussines::class, 'bsn_bussines_id', 'bsn_id');
    }
}