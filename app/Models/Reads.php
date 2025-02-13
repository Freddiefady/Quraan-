<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Reads extends Model
{
    use HasFactory,Sluggable;
    protected $fillable = ['name', 'slug'];

    public function novels(){
        return $this->hasMany(Novel::class, 'read_id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
