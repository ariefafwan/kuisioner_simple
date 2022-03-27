@extends('layouts.app')

@section('body')

<hr>
<button class="btn-primary" onclick="window.print();" class="noPrint">
    Print Me
</button>
<hr>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
         @if (session()->has('updatesuccess'))
         <div class="alert alert-primary d-flex align-items-center" role="alert">
             <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                 aria-label="Success:">
                 <use xlink:href="#check-circle-fill" />
             </svg>
             <div>
                 {{ session('updatesuccess') }}
             </div>
         </div>
     @endif
     @if ($errors->any())
                     <div class="alert alert-danger">
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                     </div>
                 @endif
    
    <div class="card text-white bg-primary mb-4">
    <div class="card-body">
            Task 1. This is some text within a card body.
    </div>
    </div>

    <div class="card-body">
         <div class="table-responsive">
             <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                 <thead class="bg-info" style="color: white">
                     <tr>
                         <th> User Name</th>
                         <th> User understand the flow how to do the task ? </th>
                         <th> User did not have problem to take the right steps to do the task ? </th>
                         <th> User succeed to complete the task ?</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($hasil1 as $row)
                     <tr>
                         <td>{{ $row->user->name }}</td>
                         <td>{{ $row->jawaban1 }}</td>
                         <td>{{ $row->jawaban2 }}</td>
                         <td>{{ $row->jawaban3 }}</td>
                         {{-- <td>{{ $row->jawaban4 }}</td> --}}
                     </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
    </div>
 </div>

 <hr>
    
    <div class="card text-white bg-primary mb-4">
    <div class="card-body">
            Task 2. This is some text within a card body.
    </div>
    </div>

    <div class="card-body">
         <div class="table-responsive">
             <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                 <thead class="bg-info" style="color: white">
                     <tr>
                         <th> User Name</th>
                         <th> User understand the flow how to do the task ? </th>
                         <th> User did not have problem to take the right steps to do the task ? </th>
                         <th> User succeed to complete the task ?</th>
                         <th> User succeed to complete the task ?</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($hasil2 as $row)
                     <tr>
                         <td>{{ $row->user->name }}</td>
                         <td>{{ $row->jawaban1 }}</td>
                         <td>{{ $row->jawaban2 }}</td>
                         <td>{{ $row->jawaban3 }}</td>
                         <td>{{ $row->jawaban4 }}</td>
                     </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
    </div>
 

 <hr>
    
 <div class="card text-white bg-primary mb-4">
 <div class="card-body">
         Task 3. This is some text within a card body.
 </div>
 </div>

 <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
              <thead class="bg-info" style="color: white">
                  <tr>
                      <th> User Name</th>
                      <th> User understand the flow how to do the task ? </th>
                      <th> User did not have problem to take the right steps to do the task ? </th>
                      <th> User succeed to complete the task ?</th>
                      <th> User succeed to complete the task ?</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($hasil3 as $row)
                  <tr>
                      <td>{{ $row->user->name }}</td>
                      <td>{{ $row->jawaban1 }}</td>
                      <td>{{ $row->jawaban2 }}</td>
                      <td>{{ $row->jawaban3 }}</td>
                      <td>{{ $row->jawaban4 }}</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
 </div>


<hr>
    
<div class="card text-white bg-primary mb-4">
<div class="card-body">
        Task 4. This is some text within a card body.
</div>
</div>

<div class="card-body">
     <div class="table-responsive">
         <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
             <thead class="bg-info" style="color: white">
                 <tr>
                     <th> User Name</th>
                     <th> User understand the flow how to do the task ? </th>
                     <th> User did not have problem to take the right steps to do the task ? </th>
                     <th> User succeed to complete the task ?</th>
                     <th> User succeed to complete the task ?</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($hasil4 as $row)
                 <tr>
                     <td>{{ $row->user->name }}</td>
                     <td>{{ $row->jawaban1 }}</td>
                     <td>{{ $row->jawaban2 }}</td>
                     <td>{{ $row->jawaban3 }}</td>
                     <td>{{ $row->jawaban4 }}</td>
                 </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
</div>
</div>
</div>



@endsection