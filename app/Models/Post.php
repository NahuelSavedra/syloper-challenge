<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'titulo',
        'slug',
        'descripcion',
    ];

    public function scopeFilter($query){
        if(request('search')){
            $query
                -> where('titulo', 'like', '%' . request('search') . '%')
                ->orWhere('descripcion','like','%' . request('search') . '%');
        }
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

}
