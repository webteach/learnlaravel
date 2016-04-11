<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
     protected $fillable = ['name'];
     
     /**
      * Get the user that owns the account.
      */
      public function user()
      {
          return $this->belongsTo(User::class);
      }
}
