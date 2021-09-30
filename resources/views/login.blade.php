@extends('master')
@section("content")
<div class="d-flex justify-content-center container custom-login ">

    <div class="row">
        
        <div class="col-sm-15 ">
          <form action=" login" method="POST">
                <div class="row mb-4">
                  @csrf
                  <label for="inputEmail3" class="control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="inputPassword3" class="control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Login</button>
              </form>  
        </div>
        
    </div>
</div>

@endsection