<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;

    protected $table = 'm_supplier';

    protected $primaryKey = 'supplier_id';

    protected $keyType = 'string'; // Because supplier_kode is a string

    public $incrementing = false;

    protected $fillable = [
        'supplier_kode',
        'supplier_nama'
    ];

    public $timestamps = false;
}


