@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mb-4">{{$cast->nama}}</h2>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title mb-0">Cast Details</h4>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <!-- Cast Information -->
                                    <div class="d-flex justify-content-between align-items-center mb-0">
                                        <h5 class="card-title mb-0"><strong>Nama:</strong> {{ $cast->nama }}</h5>
                                    </div>
                                    <p class="card-text mb-0"><strong>Umur:</strong> {{ $cast->umur }}</p>
                                    <p class="card-text"><strong>Bio:</strong> {{ $cast->bio }}</p>
                                    <a href="{{ route('edit',$cast->id) }}" class="btn btn-primary">Edit</a>
                                </div>
                                <a href="{{ route('index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection