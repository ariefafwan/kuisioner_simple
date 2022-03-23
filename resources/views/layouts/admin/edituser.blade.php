@extends('layouts.app')

@section('body')

    <hr>

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 80%;">
            <div class="card-header">
            Edit User
            </div>
            <div class="card-body">
                <div class="row g-3">
                <form action="{{ route('admin.update',$DaftarUser->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-start">
                    <div class="col-6 col-sm-8">
                    <label for="basic-url" class="form-label">Nama</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $DaftarUser->name }}" readonly>
                    </div>
                    </div>
                    </div>  
                    <div class="row justify-content-start">
                    <div class="col-6 col-sm-8">
                    <label for="basic-url" class="form-label">Role</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect02" :value="old('role_id')" name="role_id" id="role_id" required>
                          @foreach ($role as $data)

                          <option value="{{ $data->id }}">{{ $data->name }}</option>

                          @endforeach
                          
                        </select>
                    </div>
                    </div>
                    </div>  
                    <div class="col-6 col-sm-8">
                    <label for="basic-url" class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $DaftarUser->email }}" required>
                    </div>
                    </div>
                    </div>
                    <div class="card-footer">
                        <div class="row row-cols-lg-3 justify-content-between mx-auto">
                    <a href="{{ route('admin.create') }}" class="btn btn-light shadow-sm"><i class="fas fa-chevron-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary shadow-sm"><i class="fas fa-user-edit"></i> Simpan</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection