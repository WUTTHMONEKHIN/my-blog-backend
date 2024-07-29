@props([ 'blog' => null, 'categories' => null ])




<form 
    action="{{$blog ? '/admin/blogs/'.$blog->id.'/update' : '/admin/blogs/store'}}" 
    method="POST"
    enctype="multipart/form-data"
>
            @csrf
            @if ($blog)
            @method('PUT')
            @endif

  
  <div class="form-group">
    <label for="exampleInputEmail1">Blog title</label>
    <input type="text" class="form-control" 
    value="{{$blog?->title}}"
    name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
    @error('title')
    <p class="text-danger">{{$message}}</p>
    @enderror
    
  </div>

  @if ($blog)
  <img src="{{$blog->photo}}"
       width="200"
       height="200">
  @endif

  <div class="form-group">
  <label for="exampleInputEmail1">Blog Photo</label>
    <input type="file" 
           class="form-control" 
           name="photo" 
           id="exampleInputEmail1" 
           aria-describedby="emailHelp" 
           >
    @error('photo')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Blog slug</label>
    <input type="text" class="form-control" 
    value="{{$blog?->slug}}"
    name="slug" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter slug">
    @error('slug')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Blog body</label>
    <textarea name="body" class="form-control" cols="30" rows="10" id="blog-textarea">
    {{$blog?->body}}
    </textarea>
    @error('body')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Blog category</label>
    
    <select name="category_id" id="" value="{{$blog?->category}}">
      @foreach ($categories as $category)
      <option {{ $category->id == $blog?->category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>

    @error('category_id')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">{{ $blog ? 'Update' : 'Create' }}</button>
  
  
</form>