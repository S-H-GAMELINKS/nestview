<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function nested_index()
    {
        return view('nest.nested_index.nested_view');
    }
}
