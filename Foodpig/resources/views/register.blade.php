@extends('page')
@section('title','')
@section('username','')
@section('menu')
@endsection
@section('img')
@endsection
@section('content')
        <form action="register" method="post">
            @if(isset($err))
                <p style="color:red;">{{ $err }}</p>
            @endif
            <p><label for="Account">&emsp;&emsp;&emsp;帳號：</label><input id="Account" name="Account" type="text"></p>
            <p><label for="PassWord">&emsp;&emsp;&emsp;密碼：<input id="PassWord" name="PassWord" type="password"></p>
            <p><label for="PassWord2">&emsp;確認密碼：<input id="PassWord2" name="PassWord2" type="password"></p>
            <p><label for="Phone">&emsp;&emsp;&emsp;手機：<input id="Phone" name="Phone" type="text"></p>
            <p><label for="Email">&emsp;&emsp;Email：<input id="Email" name="Email" type="email"></p>
            <p><label for="AuthenticationCode">手機認證碼：<input id="AuthenticationCode" name="AuthenticationCode" type="text"></p>
            <input class="button" type="submit" value="註冊">
        </form>
@endsection