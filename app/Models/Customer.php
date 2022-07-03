<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer"; //table Name
    protected $primaryKey = "customer_id";
  //   public function Customer(){
  //     return $this->hasOne(StudentClass::class,'customer_id');
  // }
}
