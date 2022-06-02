@extends('layouts.login')

@section('content')
<div class="new-menu">
    <div class="new-form">
        <form method="POST" action=/new-account>
            @csrf
            <p class="new-title">ユーザー登録</p>
            <div class="new-item">
                <label class="new-text" for="username">ユーザー名</label>
                <!--@if ($errors->has('username'))
                    <span class=“help-block”>
                        <strong class="con">{{ $errors->first('username') }}</strong>
                    </span>
                @endif-->
                <input class="new-info" type="text" name="username">
            </div>
            <div class="new-item">
                <label class="new-text" for="mail-address">メールアドレス</label>
                <!--@if ($errors->has('mail'))
                    <span class=“help-block”>
                        <strong class="con">{{ $errors->first('email') }}</strong>
                    </span>
                @endif-->
                <input class="new-info" type="text" name="email">
            </div>
            <div class="new-item">
                <label class="new-text" for="password">パスワード</label>
                <!--@if ($errors->has('password'))
                    <span class=“help-block”>
                        <strong class="con">{{ $errors->first('password') }}</strong>
                    </span>
                @endif-->
                <input class="new-info" type="text" name="password">
            </div>
            <div class="new-item">
                <label class="new-text" for="password_confirmation">パスワード確認</label>
                <!--@if ($errors->has('password_confirmation'))
                    <span class=“help-block”>
                        <strong class="con">{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif-->
                <input class="new-info" type="password" name="password_confirmation">
            </div>
            <div class="new-item">
                <input type="submit" value="確認" class="register-btn" />
            </div>

        </form>
    </div>
</div>

@endsection
