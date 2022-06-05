@extends('layouts.login')


@section('content')

<div class="main-categories">
    <form method="POST" action="/new-main-categories">
            @csrf
            <div class="categories-item">
                <label class="categories-text" for="new-main-categories">新規メインカテゴリー</label>
                <input class="main-categories-info" type="text" name="main-categories">
                <input type="submit" value="登録" class="new-main-btn"/>
    </form>
    <form method="POST" action="/new-main-categories">
            @csrf
            <div class="categories-item">
                <label class="categories-text" for="categories-lists">メインカテゴリー</label>
                <select name="main-categories-id">
                    @foreach($lists as $list)
                                <option value = "{{$list->id}} ">{{$list->main_category}}</option>
                    @endforeach
                </select>
                <label class="categories-text" for="new-sub-categories">新規サブカテゴリー</label>
                <input class="sub-categories-info" type="text" name="sub-categories">
                <input type="submit" value="登録" class="new-sub-btn"/>
    </form>
    <div class ="side-categories">
        <p>カテゴリー一覧</p>
            <div class ="side-categories-list">
                @foreach($subs as $sub)
                        <p>{{$sub->main_category}}</p>
                        <p>{{$sub->sub_category}}</p>
                @endforeach
            </div>
        <p></p>
    </div>
</div>
