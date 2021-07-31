@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<div class='container'>

<h2>新規ユーザー登録</h2>

<h2>UserName</h2>
<div class="form-group">
  {!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => 'ユーザー名']) !!}
  {{ Form::label('ユーザー名') }}
  {{ Form::text('username',null,['class' => 'input']) }}
</div>

<h2>MailAddress</h2>
{{ Form::label('メールアドレス') }}
{{ Form::text('mail',null,['class' => 'input']) }}

<h2>Password</h2>
{{ Form::label('パスワード') }}
{{ Form::text('password',null,['class' => 'input']) }}

<h2>Password confirm</h2>
{{ Form::label('パスワード確認') }}
{{ Form::text('password-confirm',null,['class' => 'input']) }}

{{ Form::submit('登録') }}

<p><a href="/login">ログイン画面へ戻る</a></p>

</div>

{!! Form::close() !!}


@endsection
