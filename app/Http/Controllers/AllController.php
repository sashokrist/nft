<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index()
    {
        $links = Link::inRandomOrder()->limit(4)->get();
        $linksAll = Link::all();
        // dd($links);

        return view('all', compact('links', 'linksAll'));
    }
}
