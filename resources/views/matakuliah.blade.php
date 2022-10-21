@extends('layout.master')
@section('tittle','Category')

@section('content')
<div class="p-3 mb-2 bg-dark text-white">
    <h1>Mata Kuliah</h1>
    <div class="row">
        <div class="col-sm-12 col-md-8 m-12">
            <ol class="list-group">
                @forelse ($matkuls as $matakuliah)
                    <li class="list-group-item list-group-item-secondary">{{ $matakuliah }}</li>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>

@endsection
