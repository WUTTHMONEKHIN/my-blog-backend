@extends('layout')

@section('title','BMS Home')
@section('content')

  <body>
    <section id="showcase">
        <div class="home_container">
            <h1>Precioue Knowledge Sharing</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

    </section>

    <section id="newsletter">
        <div class="home_container">
            <h1>Subscribe To Our new Blogs</h1>
            <br><br><br>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <button type="submit" class=" btn btn-warning">Subscribe</button>
            </form>
            
        </div>

    </section>
    
    
</body> 

@endsection                    
