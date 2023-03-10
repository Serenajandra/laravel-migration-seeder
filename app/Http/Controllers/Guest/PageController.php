<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = train::where('orario_partenza', '>=', now())->get();
        // dd($trains);
        return view('home', compact('trains'));
    }
}
