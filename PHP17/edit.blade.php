<!-- PHP17 課題3の作成 -->

@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>プロフィールの編集</h2>
        <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group row">
            <label class="col-md-2" for="user-name">氏名</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="name" id="user-name" value="{{ $profile_form->name }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="user-gender">性別</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="gender" id="user-gender" value="{{ $profile_form->gender }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="user-hobby">趣味</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="hobby" id="user-hobby" value="{{ $profile_form->hobby }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="user-introduction">自己紹介欄</label>
            <div class="col-md-10">
              <textarea class="form-control" name="introduction" id="user-introduction" rows="15">{{ $profile_form->introduction }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-10">
              <input type="hidden" name="id" value="{{ $profile_form->id }}">
              {{ csrf_field() }}
              <input type="submit" class="btn btn-primary" value="更新">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
