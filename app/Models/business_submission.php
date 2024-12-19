<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class business_submission extends Model
{
    use HasFactory, SoftDeletes ;
    protected $primaryKey = 'sbn_id';
    protected $guarded = [];

    const CREATED_AT = 'sbn_created_at';
    const UPDATED_AT = 'sbn_updated_at';
    const DELETED_AT = 'sbn_deleted_at';

public function business_submission()
    {
        return $this->belongsTo(business_submission::class, 'sbn_business_submission_id', 'bsn_id');
    }
}