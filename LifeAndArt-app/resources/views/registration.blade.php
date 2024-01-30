@extends('layout.layout')
@section('content')
@section('title', 'Registration')




        <div class="container">

          <div class="mt-5">
            @if ($errors->any())
  
            <div class="col-12">
              @foreach ($errors->all() as $error)
                  
              <div class="alert alert-danger">
                    {{$error}}
                  </div>
  
              @endforeach
  
            </div>
                
            @endif
  
    @if (session()->has('error'))
  
      <div class="alert alert-danger">{{session('error')}}</div>
  
    @endif
  
    @if (session()->has('success'))
  
      <div class="alert alert-success">{{session('success')}}</div>
  
    @endif
  
  </div>




            <form class="ms-auto me-auto mt-3" style="width: 500px" action="{{route('register.post')}}" method="POST">

              @csrf
              @method('post')
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Full name</label>
                  <input type="text" class="form-control"  aria-describedby="emailHelp" name="name">
                </div>


               
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                   
                  </div>




                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>

               


                <button type="submit" class="btn btn-primary">Submit</button>
              
            
            </form>

        </div>

@endsection

