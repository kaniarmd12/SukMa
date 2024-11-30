<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class product_category extends Model
{
    use HasFactory, SoftDeletes ;
    protected $primaryKey = 'ctg_id';
    protected $guarded = [];

    const CREATED_AT = 'ctg_created_at';
    const UPDATED_AT = 'ctg_updated_at';
    const DELETED_AT = 'ctg_deleted_at';
}
