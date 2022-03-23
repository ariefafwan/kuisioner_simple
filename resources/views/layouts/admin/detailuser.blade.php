@extends('layouts.app')

@section('body')

    <hr>

<div class="card shadow mb-3" style="max-width: 540px;margin:auto">
    <div class="card-header bg-dark">
    </div>
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $DaftarUser->name }}</h5><br>
          <p class="card-text">NIP : {{ $DaftarUser->nip }}</p>
          <p class="card-text">NIM : {{ $DaftarUser->nim }}</p>
          <p class="card-text">Role : {{ $DaftarUser->role->name }}</p>
          <p class="card-text">Prodi : {{ $DaftarUser->prodi->name }}</p>
          <p class="card-text">Email : {{ $DaftarUser->email }}</p>
        </div>
      </div>
    </div>
    <div class="card-footer mt-5 bg-dark text-center">
        <div class="row">
        <div class="col">
    <a href="{{ route('admin.create',$DaftarUser->id) }}" class="btn btn-light shadow-sm"><i class="fas fa-chevron-left"></i> Kembali</a></div>
    </div>
    </div>
</div>

@endsection