<x-layout >

    <!-- single blog section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto ">
          <img
            src="{{$blog->photo}}"
            class="card-img-top"
            accept="image/jpg,image/png,image/jpeg"
            />
          <h3 class="my-3">{{$blog->title}}</h3>
          <div class="text-center">
            <div>Author - <a href="/users/{{$blog->author->username}}">{{$blog->author->name}}</a></div>
            <div><a href="/categories/{{$blog->category->slug}}"><span class="badge bg-primary">{{$blog->category->name}}</span></a></div>
            <div class="text-secondary">{{$blog->created_at->diffForHumans()}}</div>
            <div>
              <form action="/blogs/{{$blog->slug}}/handle-subscription" 
              method="POST">
                @csrf

              @if ($blog->isSubscribedBy(auth()->user()))
              <button type="submit" class="btn btn-danger">unsubscribe</button>
              @else
              <button type="submit" class="btn btn-warning">subscribe</button>
              @endif

              </form>
              
            </div>
          </div>
          <p class="lh-md mt-3">
            {!!$blog->body!!}
          </p>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="my-3">
            <form action="/blogs/{{$blog->slug}}/comments" method="POST">
              @csrf
            <textarea 
             placeholder="comment here..."
             class="form-control"
             name="body" id="" cols="30" rows="10"></textarea>
            
             <button class="mt-3 btn btn-primary" type="submit">Comment</button>
            </form>
          </div>
             
        @foreach($blog->comments()->with('user')->orderby('id', 'desc')->get() as $comment)
      <div>
        <h3>
          {{$comment->user->name}}
        </h3>
        <p>
           {{$comment->body}}
        </p>
        <p>
          commented at - {{$comment->created_at->diffForHumans()}}
        </p>
        <div class="d-flex">
        <a href="/comments/{{$comment->id}}/edit"
            class="btn btn-warning mx-2" 
            type="submit">
            edit</a>
        <form 
             action="/comments/{{$comment->id}}" 
             method="POST">
          @csrf
          @method('delete')
          <button class="btn btn-danger" 
          type="submit">
            delete</button>
        </form>
       </div> 
      </div>
      @endforeach

        </div>


      </div>

      
    </div>

    <!-- subscribe new blogs -->
    <x-subscribe />
    <x-blogs_you_may_like_section :randomBlogs="$randomBlogs" />
    
    <!-- footer -->
</x-layout>











    