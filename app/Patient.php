<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
     
    public function gender()
   {
      return $this->hasOne(Gender::class);
   }

    public function service()
   {
      return $this->hasOne(Service::class);
   }
}
