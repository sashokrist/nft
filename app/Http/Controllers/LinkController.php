<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class LinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $linkss = Link::inRandomOrder()->limit(4)->get();
        $linksAll = Link::all();

        return view('welcome', compact('linkss', 'linksAll'));
    }

    public function create()
    {
        return view('link.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'link' => 'required',
                'description' => 'required'
            ]
        );

        if ($request->picture !== null) {
            $imageName = time() . '.' . $request->picture->extension();
            $request->picture->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.jpg';
        }


        $str = $request->link;
        $str = preg_replace('#^https?://#', '', rtrim($str,'/'));

        $link = new Link();
        $link->user_id = auth()->user()->id;
        $link->link = $str;
        $link->description = $request->description;
        $link->picture = $imageName;
        $link->save();

        return redirect()->route('home')->with('message', 'Link was added successfully');
    }

    public function destroy(Request $request)
    {
        $link = Link::where('user_id', $request->user_id)->first();
        $link->delete();
        return redirect()->back()->with('message', 'You deleted your link successfully!');
    }

    public function getResults(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return redirect()->route('home');
        }

        $links = Link::where(DB::raw("CONCAT(description, ' ', link)"), 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        return view('search.result')->with('links', $links);
    }
}
