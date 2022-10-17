<?php

namespace App\Models;

use App\Models\NomActor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nom_actors()
    {
        return $this->hasMany(NomActor::class);
    }
}
