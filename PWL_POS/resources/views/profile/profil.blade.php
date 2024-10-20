@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Menampilkan foto profil dan detail pengguna -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Profil Pengguna</h3>
                </div>
                <div class="card-body text-center">
                    <!-- Menampilkan foto profil -->
                    {{-- <img src="{{ $user->avatar ? Storage::url($user->avatar) : asset('images/default_photo.jpg') }}"
                         alt="Foto Profil"
                         class="img-fluid rounded-circle mb-3"
                         style="width: 150px; height: 150px; object-fit: cover;"> --}}
                         <img src="{{ Storage::url($user->avatar) }}" alt="Foto Profil"
                         class="img-fluid rounded-circle mb-3"
                         style="width: 150px; height: 150px; object-fit: cover;">
                        {{-- <p>Path: {{ $user->avatar }}</p> --}}
                        {{-- <p>URL: {{ Storage::url($user->avatar) }}</p> --}}
                        {{-- <p>{{ Storage::url($user->avatar) }}</p> --}}
                    <!-- Detail pengguna -->
                    <h3 style="font-size: 24px; font-weight: bold;">{{ $user->nama }}</h3>
                    <p class="card-text">Username: {{ $user->username }}</p>
                    <p class="card-text">Password: ********</p>

                    <!-- Tombol untuk edit profil -->
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profil</a>

                    <!-- Tombol untuk ganti password -->
                    <a href="{{ route('password.change') }}" class="btn btn-warning">Ganti Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
