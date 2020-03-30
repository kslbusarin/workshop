<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'customer_id';

     public function company()
     {
         return $this->belongsTo(Company::class, 'company_id','company_id');
     }
}
