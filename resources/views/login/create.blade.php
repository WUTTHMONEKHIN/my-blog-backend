<x-layout>
    <div class="container my-3">
        <div class="row">
            <h1>Login Form</h1>
<form action="/login" 
method="POST">
@csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" 
    id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Enter email">
    @error('email')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" 
    id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Enter Password">
    @error('password')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group my-3">
  <button type="submit" 
  class="btn btn-primary">
  Login
</button>
  </div>
  
</form>
</div>
</div>
</x-layout>