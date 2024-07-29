<div class="header">
    <div class="inner-header">
    

    <div class="nav">

        
        
        

        @if(auth()->check())
        <ul>
          <li><form action="/logout" method="POST">
            @csrf

          <button class="btn btn-danger">logout</button>

          </form></li>
         
          @else
          
          <li><a href="/login" class="nav-link">
            Login</a></li>
            <li><a href="/register" class="nav-link">
              Register</a></li>
          @endif
          
          <li><a href="/" class="nav-link">Home</a></li>
          <li><a href="/#blogs" class="nav-link">Blogs</a></li>
          <li><a href="#subscribe" class="nav-link">Subscribe</a><li>
         
        
      

</div>
</div>
</div>


    