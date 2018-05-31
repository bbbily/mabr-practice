<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public function person() {
      return $this.belongto('App\Person');
    }
}
