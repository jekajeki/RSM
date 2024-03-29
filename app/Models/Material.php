<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'volume',
        'id_jenis_monitoring',
        'id_detail_monitoring'
    ];

    public function detail_monitoring()
    {
        return $this->belongsTo(DetailMonitoring::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
