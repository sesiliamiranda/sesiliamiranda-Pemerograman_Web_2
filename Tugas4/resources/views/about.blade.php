@extends('layouts.main')

@section('container')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<table class="table">
    <h2><b>WEBSITE OBAT</b></h2>
    <p class="about" style=" margin-top: 30px; margin-bottom: 1rem; width: 900px; text-align: justify; font-size: 18px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Website berikut merupakan sebuah website yang dapat digunakan untuk menyimpan nama nama obat beserta 
        jenis obatnya, yang mana data dari obat tersebut bisa ditambahkan, diedit dan dihapus sesuai dengan
         keinginan pengguna, tetapi pada website ini yang bisa melakukan CRUD hanyalah user yang identifikasi 
         sebagai seorang admin. </p>
</table>
@endsection
