<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengambilan extends Model
{
    use HasFactory;
    protected $table = 'pengambilans';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function penjualan()
    {
        return $this->hasOne(Penjualan::class);
    }
}
