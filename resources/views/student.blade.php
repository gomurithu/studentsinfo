<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="content">
    <!-- Content Header (Page header) -->
  
    <!-- /.content-header -->
@if(session('success'))
   <div class="alert mx-auto alert-success ">
     <strong>Success!</strong> {{session('success')}}
   </div>
@endif
@if(session('error'))
   <div class="alert alert-danger ">
  <strong>Error!</strong> {{session('error')}}
   </div>
@endif
<div class=" w- mx-auto card card-primary  ">
              <div class="card-header ">
                <h3 class="card-title ">student</h3>
             
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('add.students')}}"  enctype="multipart/form-data" method="post" class="px-5">
                @csrf
                <div class="card-body">
                <div class="row ">
                <div class="col-sm-6">
                
                  <div class="form-group ">
                    <label for="name"> Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control " id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  @if($errors->has('name'))
                    {{$errors->first('name')}}
                  @endif
                  </div>
                  
                 
                  <div class="form-group ">
                    <label for="email"> Email</label>
                    <input type="email" class="form-control " value="{{old('email')}}" name="email" placeholder="Enter email" />
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  @if($errors->has('email'))
                    {{$errors->first('email')}}
                  @endif
                  </div>
                  <div class="form-group ">
                    <label for="address">Address</label>
                    <input type="text" class="form-control "  name="address" placeholder="Enter address" />
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  @if($errors->has('address'))
                    {{$errors->first('address')}}
                  @endif
                  </div>
                  <button type="submit" class="btn btn-primary">submit </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>