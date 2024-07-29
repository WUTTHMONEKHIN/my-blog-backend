<div class="card">
            <img
              src="{{$blog->photo}}"
              class="card-img-top"
              accept="image/jpg,image/png,image/jpeg"
            />
            <div class="card-body">
              <h3 class="my-3">{{$blog->title}}</h3>
              <p class="fs-6 text-secondary"><a href="/?author={{$blog->author->username}}">
                {{$blog->author->name}}</a>
                <span> - {{$blog->created_at}}</span>
              </p>
              <div class="tags my-3">
                <a href="/?category={{$blog->category->slug}}"><span class="badge bg-primary">{{$blog->category->name}}</span></a>
                
              </div>
              <div class="text-secondary">{{$blog->created_at->diffForHumans()}}</div>
              <p class="card-text">
                {!!substr($blog->body,0,100)!!}...
              </p>
              <a href="{{route('blogs.show', $blog->slug)}}" class="btn btn-primary">Read More</a>
            </div>
          </div>