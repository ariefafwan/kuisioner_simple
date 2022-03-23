@extends('layouts.appguest')

@section('mahasiswa')

    <hr>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Pilih Dosen</label>
        <select class="form-control" id="exampleFormControlSelect1">
          @foreach ($dosen as $data)
            <option value="{{ $data->id }}">{{ $data->name }} - {{ $data->prodi->name }}</option>
          @endforeach
        </select>
      </div>

    <hr>
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

@endsection
