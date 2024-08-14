<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Periode extends Model
{
    use HasUuids;
    use HasFactory;
    protected $table = "periode";
    protected $guarded = ['id'];
}
