<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class histories extends Model
{
    //
    protected $guarded=array('id');
    
    public static $rules=array(
        'news_id'=>'required',
        'edited_at'=>'required',
        );
}
