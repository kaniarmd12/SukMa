<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory, SoftDeletes ;
    protected $primaryKey = 'pdc_id';
    protected $guarded = [];

    const CREATED_AT = 'pdc_created_at';
    const UPDATED_AT = 'pdc_updated_at';
    const DELETED_AT = 'pdc_deleted_at';

public function product_category()
    {
        return $this->belongsTo(product_category::class, 'pdc_category_product_id', 'ctg_id');
    }
}