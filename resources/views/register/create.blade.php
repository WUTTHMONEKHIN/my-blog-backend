<x-layout>
    <div class="container my-3">
        <div class="row">
            <h1>Register Form</h1>
<form action="/register" 
method="POST">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" 
    class="form-control" 
    name="name" 
    id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Enter name">
    @error('name')
    <p class="text-danger">{{$message}}</p>
    @enderror
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" 
    id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Enter email">
    @error('email')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="userName">User Name</label>
    <input type="text" class="form-control" name="username"  
    id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Enter User name">
    @error('username')
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
  Submit
</button>
  </div>
  
</form>
</div>
</div>
</x-layout>