<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Dashboard extends Model
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
