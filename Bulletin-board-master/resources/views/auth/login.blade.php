@extends('layouts.login')

@section('content')
<div class="login-menu">
    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <p class="login-title">ログイン</p>
            <div class="login_item">
                <label class="profile-text" for="mail_address">メールアドレス</label>
                <input class="profile-info" type="text" name="email">
            </div>
            <div class="login_item">
                <label class="profile-text" for="password">パスワード</label>
                <input class="profile-info" type="password" name="password" />
            </div>
            <div class="login_item">
                <input type="submit" value="ログイン" class="login-btn"/>
            </div>
            <div class="new"><a href="/register">新規ユーザーの方はこちら</a></div>
        </form>
    </div>
</div>

@endsection
