<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ObatUserController extends Controller
{
    public function index()
    {
        $data['obat'] = DB::table('obat')->get();
        return view('obat_user', $data);
    }
}
