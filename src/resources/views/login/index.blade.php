@extends('base.layouts.base')
@section('main')
<div class="login-form">
    <p class="login-form__title">Login</p>
    <form action="">
        <div>
            <label for="mail">E-Mail Address</label>
            <input type="text" id="mail" class="textbox">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" class="textbox">
        </div>
        <div>
            <label></label>
            <input type="checkbox" class="checkbox">Remenber Me
        </div>
        <div>
            <label></label>
            <button class="button is-info">Login</button>
            <a href="">Forget Your Password?</a>
        </div>
    </form>
</div>
@endsection