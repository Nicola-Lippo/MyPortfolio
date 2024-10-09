<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    //Relazione One to Many con User
    public function users()
    {
        return $this->hasMany(User::class);
    }

    //Relazione Many to Many con Type
    public function types()
    {
        return $this->BelongsToMany(Type::class);
    }

    //Relazione One to Many con Work
    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
