<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    //Relazione Many to Many con Collection
    public function collections()
    {
        return $this->BelongsToMany(Collection::class);
    }
}
