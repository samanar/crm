<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ThemeController extends Controller
{
    private $themes = [
        "0" => "flatty",
        "1" => "Cerulean",
        "2" => "Cosmo",
        "3" => "Cyborg",
        "4" => "Darkly",
        "5" => "Journal",
        "6" => "Lumen",
        "7" => "Paper",
        "8" => "Readable",
        "9" => "Sandstone",
        "10" => "Simplex",
        "11" => "Slate",
        "12" => "Solar",
        "13" => "Spacelab",
        "14" => "Superhero",
        "15" => "United",
        "16" => "Yeti"
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function changeTheme(Request $request)
    {

        $this->validate($request, [
            'theme' => 'required|integer',
            'rtl' => 'nullable'
        ]);

        $user = Auth::user();
        $user->theme = $request->input('theme');
        $user->rtl = ($request->input('rtl')) ? 0 : 1;
        $user->save();
        return redirect()->home();

    }
}
