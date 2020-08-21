@extends('base.layouts.base')
@section('main')
<div class="login-form">
    <p class="login-form__title">Register</p>
    <form action="{{ route('user.store') }}" method="POST">
        <!-- CSRF保護 -->
        @csrf

        <div>
            <label for="name">name</label>
            <input type="text" id="name" class="textbox {{ $errors->first('name') ? 'danger-input' : '' }}" name="name">
            @error('name')
            <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="mail">E-Mail Address</label>
            <input type="text" id="mail" class="textbox {{ $errors->first('email') ? 'danger-input' : '' }}" name="email">
            @error('email')
            <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" class="textbox {{ $errors->first('password') ? 'danger-input' : '' }}" name="password">
            @error('password')
            <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="confirm">Confirm Password</label>
            <input type="password" id="confirm" class="textbox {{ $errors->first('password_confirmation') ? 'danger-input' : '' }}" name="password_confirmation">
            @error('password_confirmation')
            <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label></label>
            <button class="button is-info">Register</button>
        </div>
    </form>
</div>
@endsection