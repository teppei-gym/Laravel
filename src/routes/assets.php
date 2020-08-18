<?php

use App\Facades\Assets;

// login
Assets::for('login', function ($tag) {
    $tag->link(['rel' => 'stylesheet', 'href' => asset('css/user/login/index.css')]);
});

// 新規登録
Assets::for('user.index', function ($tag) {
    $tag->link(['rel' => 'stylesheet', 'href' => asset('css/user/login/index.css')]);
});
