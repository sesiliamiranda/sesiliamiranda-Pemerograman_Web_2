@extends('layouts.main')

@section('container')


<table class="table">
    <div class="row g-3" style="min-height: 100px">
        @foreach ($obat as $item )
            <div class="col">
                <div class="card shadow-sm" style="width: 200px" >
                    <div class="card-body" >
                        <p style="text-align: center; font-size:20px; font-weight:700">{{$item->nama}}</p>
                        <p style="text-align: justify">Jenis Obat {{$item->jenis}}</p>
                    </div>  
                </div>
            </div> 
        @endforeach
    </div> 
</table>
@endsection
