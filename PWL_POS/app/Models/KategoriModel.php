<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'm_kategori';

    // Define the primary key for the table
    protected $primaryKey = 'kategori_id';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'kategori_kode',
        'kategori_nama',
    ];

    // Disable timestamps if not used in your table
    public $timestamps = false;
}
