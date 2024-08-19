<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function root() {
        return view('index');
    }

    public function index(Request $request) {
        if(view()->exists($request->path())) {
            return view($request->path());
        } else {
            abort(404);
        }
    }
}
