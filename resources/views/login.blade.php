@extends('page')
@section('title','')
@section('username','')
@section('menu')
@endsection
@section('img')
@endsection
@section('content')
        <form action="login" method="post">
            @if(isset($err))
                <p style="color:red;">{{ $err }}</p>
            @endif
            <p><label for="Account">帳號：</label><input id="Account" name="Account" type="text"></p>
            <p><label for="PassWord">密碼：<input id="PassWord" name="PassWord" type="password"></p>
            <a href="/register">註冊帳號</a>
            <input class="button" type="submit" value="登入">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
@endsection