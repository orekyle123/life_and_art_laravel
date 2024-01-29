@extends('layout.layout')
@section('content')

        @section('title', 'Registration')


        <div class="container">

            <form class="ms-auto me-auto mt-3" style="width: 500px">
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Full name</label>
                  <input type="email" class="form-control"  aria-describedby="emailHelp" name="name">
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contac number</label>
                    <input type="email" class="form-control" name="con" aria-describedby="emailHelp">
                   
                  </div>


                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="email" class="form-control" name="address" aria-describedby="emailHelp">
                    
                  </div>


                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="pass">
                </div>

               


                <button type="submit" class="btn btn-primary">Submit</button>
              
            
            </form>

        </div>

@endsection

