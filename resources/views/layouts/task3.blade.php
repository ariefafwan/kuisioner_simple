@extends('layouts.appguest')

@section('mahasiswa')

    <hr>

    <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- <div class="form-group">
        <label for="exampleFormControlSelect1">Pilih Dosen</label>
        <select class="form-control" name="dosen_id" id="dosen_id">
          @foreach ($dosen as $data)
            <option value="{{ $data->id }}">{{ $data->name }} - {{ $data->prodi->name }}</option>
          @endforeach
        </select>
    </div> --}}

    <hr>

    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
    @foreach ($pertanyaan as $data)
    <div class="form-group">
        <label for="Pertanyaan">{{ $data->quest }}</label>
        <div class="form-check">
            <div class="row">
                <div class="col">
                    <input type="radio" name="data[{{ $data->id }}]" id="data" value="6"
                        class="form-check-input">
                    <label for="data[]" class="form-check-label">YES</label>
                </div>
                <div class="col">
                    <input type="radio" name="data[{{ $data->id }}]" id="data" value="7"
                        class="form-check-input">
                    <label for="data[]" class="form-check-label">NO</label>
                </div>
                <div class="col">
                    <input type="radio" name="data[{{ $data->id }}]" id="data" value="8"
                        class="form-check-input">
                    <label for="data[]" class="form-check-label">PARTIAL</label>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <hr>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Saran</label>
        <textarea class="form-control" name="saran" id="saran" rows="3"></textarea>
    </div>
    <hr>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        {{-- <button type="button" class="btn btn-light shadow" data-dismiss="modal">Kembali</button> --}}
    </div>
    </form>

@endsection
