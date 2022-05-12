<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function brandTouser()
    {
      return $this->belongsTo(user::class,  'Added_by', 'id');
    }
}
