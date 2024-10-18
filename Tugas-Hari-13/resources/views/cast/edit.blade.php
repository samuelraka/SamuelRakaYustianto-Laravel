@extends('layouts.master')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">@yield('title', 'Edit Cast')</h3>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Cast</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('update',$cast->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $cast->nama) }}" required>
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur" value="{{ old('umur', $cast->umur) }}" required>
                @error('umur')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea class="form-control" id="bio" name="bio" rows="4" required>{{ old('bio', $cast->bio) }}</textarea>
                @error('bio')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="{{ route('index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection