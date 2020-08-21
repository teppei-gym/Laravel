<?php

use App\Facades\Assets;

// login
Assets::for('login', function ($tag) {
    $tag->link(['rel' => 'stylesheet', 'href' => asset('css/login/index.css')]);
});

// 新規登録
Assets::for('create', function ($tag) {
    $tag->link(['rel' => 'stylesheet', 'href' => asset('css/register/create.css')]);
});
