<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  use HasFactory;
  protected $fillable =  [
    'name',
    'people_number',
    'check_in',
    'check_out',
    'room_type',
    'cost',
    'voucher',
  ];

  public function orders()
  {
    return $this->hasMany(Order::class);
  }
}
