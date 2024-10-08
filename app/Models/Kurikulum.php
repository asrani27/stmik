<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kurikulum extends Model
{
    use HasUuids;
    use HasFactory;
    protected $table = "kurikulum";
    protected $guarded = ['id'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'kode_jurusan', 'kode');
    }
    public function detail()
    {
        return $this->hasMany(KurikulumDetail::class, 'kurikulum_id', 'id');
    }
}
