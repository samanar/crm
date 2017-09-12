<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ThemeController extends Controller
{
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
