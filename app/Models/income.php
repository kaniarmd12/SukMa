<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class income extends Model
{
    use HasFactory, SoftDeletes ;
    protected $primaryKey = 'icm_id';
    protected $guarded = [];

    const CREATED_AT = 'icm_created_at';
    const UPDATED_AT = 'icm_updated_at';
    const DELETED_AT = 'icm_deleted_at';

public function income()
    {
        return $this->belongsTo(income::class, 'icm_income_id', 'icm_id');
    }
}