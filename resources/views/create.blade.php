
@extends('master')
@section('title')
    Create Student|Student Management
@endsection

@section('content')

   <h2>Create New Student</h2>
   <form class="form-horizontal" action="{{route('store')}}" method="post" data-parsley-validate>

       @if ($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif



       {{csrf_field()}}
       <div class="form-group">
           <label class="control-label col-sm-2" for="name">Name:</label>
           <div class="col-sm-10">
               <input type="text" class="form-control" id="department_name" name="name" placeholder="Enter Student Name" maxlength="10" required>
           </div>
       </div>

       <div class="form-group">
           <label class="control-label col-sm-2" for="registration_id">Registration No:</label>
           <div class="col-sm-10">
               <input type="number" class="form-control" id="registration_id" name="registration_id" placeholder="Enter Registration ID" required>
           </div>
       </div>

       <div class="form-group">
           <label class="control-label col-sm-2" for="department">Department:</label>
           <div class="col-sm-10">
               <input type="text" class="form-control" id="department" name="department_name" placeholder="Enter Department Name" required>
           </div>
       </div>


       <div class="form-group">
           <label class="control-label col-sm-2" for="info">Info:</label>
           <div class="col-sm-10">
               <textarea rows="5" type="text" class="form-control" id="info" name="info" placeholder="Enter Student Info"></textarea>
           </div>
       </div>

       <div class="form-group">
           <div class="col-sm-offset-2 col-sm-10">
               <button type="submit" class="btn btn-success">Register Student</button>
           </div>
       </div>
   </form>
@endsection
