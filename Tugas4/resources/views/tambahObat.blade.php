@extends('layouts.main')

@section('container')

<h3 class="text-center"><b>Tambah Data Obat</b></h3>
    <div class="container "> 
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="{{ route('obat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="mb-3">
                        <label for="nama_input" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_input" name="namaInput">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_input" class="form-label">jenis</label>
                        <input type="text" class="form-control" id="jenis_input" name="jenisInput">
                    </div>
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
