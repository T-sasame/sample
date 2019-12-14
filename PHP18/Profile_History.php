<?php
//PHP18 課題2
//profile_historiesテーブルにアクセスするモデルを作る

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_History extends Model
{
  protected $table = 'profile_histories';

  protected $guarded = array('id');

  public static $rules = array(
    'profile_id' => 'required',
    'edited_at' => 'required',
  );
}
