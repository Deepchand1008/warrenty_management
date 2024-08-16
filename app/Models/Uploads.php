<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    use HasFactory;

    protected $table='product_upload_system';
    protected $fillable = [
        'id',
        'invoice_number',
        'invoice_date',
        'created_at',
        'updated_at',
        'status'
];
}
