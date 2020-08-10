<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
     
    public function gender()
   {
      return $this->belongsTo(Gender::class);
   }

    public function service()
   {
      return $this->belongsTo(Service::class);
   }
}
