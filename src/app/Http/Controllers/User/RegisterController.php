<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.create');
    }
    /**
     * @param App\Http\Requests\RegisterStoreRequest
     */
    public function store(RegisterStoreRequest $request)
    {
        User::create($request->all());

        $user = User::where('name', $request->name)
            ->where('email', $request->email)
            ->first()
            ->toArray();

        session(['user' => $user]);

        return redirect()->route('index');
    }
}
