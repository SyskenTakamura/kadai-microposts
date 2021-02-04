<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($id)
    {
        \Auth::user()->favorite_in($id);
        return back();
    }


    public function destroy($id)
    {
        \Auth::user()->favorite_out($id);

        // 前のURLへリダイレクトさせる
        return back();
    }
}
