<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    //Relazione One to Many con Collection
    public function collections()
    {
        return $this->belongsTo(Collection::class);
    }
}
