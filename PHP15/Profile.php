<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = array('id');

  //PHP15 課題5の追加
  public static $rules = array(
    'name' => 'required',
    'gender' => 'required',
    'hobby' => 'required',
    'introduction' => 'required',
  );
}
