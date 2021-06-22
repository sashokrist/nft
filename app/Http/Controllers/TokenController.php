<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tokens = Token::all();
        return view(' token.index', compact('tokens'));
    }

    public function create()
    {
        return view('token.create');
    }

    public function store(Request $request)
    {
       // dd($request->all());

        $request->validate(
            [
                'name' => 'required',
                'hash_token' => 'required',
                'data' => 'required',
                'price' => 'required'
            ]
        );

    }
}
