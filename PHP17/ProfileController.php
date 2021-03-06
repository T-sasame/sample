<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Profile Modelを扱う為の追記
use App\Profile;

class ProfileController extends Controller
{
  public function add()
  {
    return view('admin.profile.create');
  }

// PHP17 課題1の追加
  public function create(Request $request)
  {
    //Varidationを行う
    $this->validate($request, Profile::$rules);

    $profile = new Profile;
    $form = $request->all();

    //フォームから送信されてきた_tokenを削除する
    unset($form['_token']);

    //データベースに保存する
    $profile->fill($form);
    $profile->save();

    return redirect('admin/profile/');
  }

  public function edit(Request $request)
  {
    //Profile Modelからデータを取得する
    $profile = Profile::find($request->id);
    if (empty($profile)) {
      abort(404);
    }
    return view('admin.profile.edit',['profile_form' => $profile]);
  }

  public function update(Request $request)
  {
    //Validationをかける
    $this->validate($request, Profile::$rules);
    //Profile Modelからデータを取得する
    $profile = Profile::find($request->id);
    //送信されてきたフォームデータを格納する
    $profile_form = $request->all();

    unset($profile_form['_token']);

    //該当するデータを上書きして保存する
    $profile->fill($profile_form)->save();

    return redirect('admin/profile/');
  }

  public function index(Request $request)
  {
    $cond_title = $request->cond_title;
    if ($cond_title != '') {
      //検索されたら検索結果を取得する
      $posts = Profile::where('name', $cond_title)->get();
    } else {
      //それ以外は全てを取得する
      $posts = Profile::all();
    }
    return view('admin.profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  public function delete(Request $request)
  {
    //該当するProfile Modelを取得
    $profile = Profile::find($request->id);
    //削除する
    $profile->delete();

    return redirect('admin/profile/');
  }
}
