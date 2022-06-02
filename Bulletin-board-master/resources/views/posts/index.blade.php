@extends('layouts.login')


@section('content')
<div class="post-list">
    <p>{{Auth::user()->username}}さん</p>
    <p>更新時間</p>
    <p>view</p>
    <p><a href="/categories" class="categories-link">カテゴリー追加</a></p>
    <p><a href="/logout" class="ac_item_link logout">ログアウト</a></p>
</div>



@endsection
