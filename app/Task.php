<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Person;

class Task extends Model
{

    public function person() {
      return $this->belongsto('App\Person');
    }
}
