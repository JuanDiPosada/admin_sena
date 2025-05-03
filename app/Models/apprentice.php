<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
    public function computer(){
        return $this->belongsTo(Computer::class);
    }
    public function course()  {
        return $this->belongsTo(Course::class);
    }
}
