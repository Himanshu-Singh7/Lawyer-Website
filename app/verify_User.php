<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verify_User extends Model
{
    protected $guarded = [] ;
    public function user(){
        return $this->belongsTo('App\register_lawer_table','user_id');
    }
}
