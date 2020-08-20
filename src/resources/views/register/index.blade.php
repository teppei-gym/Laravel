@extends('base.layouts.base')
@section('main')
<div class="login-form">
    <p class="login-form__title">Register</p>
    <form action="">
        <div>
            <label for="name">name</label>
            <input type="text" id="name" class="textbox">
        </div>
        <div>
            <label for="mail">E-Mail Address</label>
            <input type="text" id="mail" class="textbox">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" class="textbox">
        </div>
        <div>
            <label for="confirm">Confirm Password</label>
            <input type="password" id="confirm" class="textbox">
        </div>
        <div>
            <label></label>
            <button class="button is-info">Register</button>
        </div>
    </form>
</div>
@endsection