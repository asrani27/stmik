<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KurikulumDetail extends Model
{
    use HasUuids;
    use HasFactory;
    protected $table = "kurikulum_detail";
    protected $guarded = ['id'];

    public function jurusan()
    {
        return $this->belongsTo(Kurikulum::class, 'kurikulum_id', 'id');
    }
    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'kode_mata_kuliah', 'kode');
    }
}
