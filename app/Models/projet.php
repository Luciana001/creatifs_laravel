<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'texte', 'image', 'creatif'];

    public function createur()
    {
        return $this->belongsTo(\App\Models\Creatif::class, 'creatif');
    }

    public function tags()
    {
        return $this->BelongsToMany(\App\Models\Tag::class, 'projets_has_tags', "projet", 'tag');# code...
    }

   
}
