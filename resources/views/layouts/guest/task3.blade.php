@extends('layouts.appguest')

@section('mahasiswa')

    <hr>

    <form action="{{ route('jawaban3.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
    <input type="hidden" name="task" id="task" value="3">

    <div class="card text-white bg-primary mb-4">
        <div class="card-body">
          Task 3. This is some text within a card body.
        </div>
      </div>

    <div class="form-group mb-3">
        <label for="Pertanyaan"> User understand the flow how to do the task ? </label>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="jawaban1"
                id="pembayaran_id" aria-readonly="true">
                @foreach ($jawaban as $data)
                
                <option value="{{ $data->name }}">{{ $data->name }}</option>

                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="Pertanyaan"> User did not have problem to take the right steps to do the task ? </label>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="jawaban2"
                id="pembayaran_id" aria-readonly="true">
                @foreach ($jawaban as $data)
                
                <option value="{{ $data->name }}">{{ $data->name }}</option>

                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="Pertanyaan"> User did not need assistance to complete the task ? </label>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="jawaban3"
                id="pembayaran_id" aria-readonly="true">
                @foreach ($jawaban as $data)
                
                <option value="{{ $data->name }}">{{ $data->name }}</option>

                @endforeach
            </select>   
        </div>
    </div>
    <div class="form-group">
        <label for="Pertanyaan"> User succeed to complete the task ? </label>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="jawaban4"
                id="pembayaran_id" aria-readonly="true">
                @foreach ($jawaban as $data)
                
                <option value="{{ $data->name }}">{{ $data->name }}</option>

                @endforeach
            </select>   
        </div>
    </div>
    <hr>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        {{-- <button type="button" class="btn btn-light shadow" data-dismiss="modal">Kembali</button> --}}
    </div>
    </form>

@endsection
