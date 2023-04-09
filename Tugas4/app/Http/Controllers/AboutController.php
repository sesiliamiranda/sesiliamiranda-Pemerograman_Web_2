<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index()
    {
        // $data['obat'] = DB::table('obat')->get();
        return view('about');
    }

}
