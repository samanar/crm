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

    public function changeTheme(Request $request){
        $this->validate($request , [
           'theme' => 'required|integer'
        ]);

        $user = Auth::user();
        $user->theme = $request->input('theme');
        $user->save();
        return redirect()->home();

    }
}
