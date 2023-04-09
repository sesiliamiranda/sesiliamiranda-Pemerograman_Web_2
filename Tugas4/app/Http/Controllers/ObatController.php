<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    public function index()
    {
        $data['obat'] = DB::table('obat')->get();
        return view('obat', $data);
    }

    public function create()
    {
        return view('tambahObat');
    }


    public function store(Request $request)
        {
            $namaInput = $request->input('namaInput');
            $jenisInput = $request->input('jenisInput');


            // dd($request->input(''));


            $query = DB::table('obat')->insert([
                'nama' => $namaInput,
                'jenis' => $jenisInput
            ]);


            if ($query) {
                return redirect()->route('obat')->with('success', 'Data Berhasil Ditambahkan');
            } else {
                return redirect()->route('obat')->with('failed', 'Data Gagal Ditambahkan');
            }
        }
    
        public function edit(string $id)
        {
            $data['obat'] = DB::table('obat')->where('id', $id)->first();
    
    
            return view('editObat', $data);
        }
    
    
        public function update(Request $request, string $id)
        {
        
            $namaInput = $request->input('namaInput');
            $jenisInput = $request->input('jenisInput');
    
    
            $query = DB::table('obat')->where('id', $id)->update([
                'nama' => $namaInput,
                'jenis' => $jenisInput
            ]);
    
    
            if ($query) {
                return redirect()->route('obat')->with('success', 'Data Berhasil Diupdate');
            } else {
                return redirect()->route('obat')->with('failed', 'Data Gagal Diupdate');
            }
        }
    
        public function destroy(string $id)
        {
            $query = DB::table('obat')->where('id', $id)->delete();


            if ($query) {
                return redirect()->route('obat')->with('success', 'Data Berhasil Dihapus');
            } else {
                return redirect()->route('obat')->with('failed', 'Data Gagal Dihapus');
            }
        }
}
