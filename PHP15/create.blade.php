@extends('layouts.profile')

@section('title', 'プロフィールの新規作成')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>プロフィール新規作成</h2>

        <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

<!-- PHP15 課題6 バリデーションでのエラーチェック -->
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
              <input type="text" class="form-control" name="name" id="user-name" value="{{ old('name') }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="user-gender">性別</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="gender" id="user-gender" value="{{ old('gender') }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="user-hobby">趣味</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="hobby" id="user-hobby" value="{{ old('hobby') }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="user-introduction">自己紹介欄</label>
            <div class="col-md-10">
              <textarea class="form-control" name="introduction" id="user-introduction" rows="15">{{ old('introduction') }}</textarea>
            </div>
          </div>
          {{ csrf_field() }}
          <input type="submit" class="btn btn-primary" value="更新">
        </form>
      </div>
    </div>
  </div>
@endsection
