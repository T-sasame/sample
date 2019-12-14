<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    'name' => 'required',
    'gender' => 'required',
    'hobby' => 'required',
    'introduction' => 'required',
  );

//PHP18 課題2
//Profileモデルから、Profile_Historyモデルを参照する
  public function profile_histories()
  {
    return $this->hasMany('App\Profile_History');
  }
}
