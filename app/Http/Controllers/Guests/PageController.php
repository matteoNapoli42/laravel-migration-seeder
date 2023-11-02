<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Trains;

class PageController extends Controller
{
    public function home()
    {
        $trains = Trains::all();


        return view('home', compact('trains'));
    }
}
