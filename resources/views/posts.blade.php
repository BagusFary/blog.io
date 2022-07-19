@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center text-dark display-3">{{ $title }}</h1>



<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">

      @if (request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
      @endif

      @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
      @endif

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari Film" name="search" value="{{  request('search') }}">
        <button class="btn btn-outline-dark " type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>


@if ($posts->count())
<div class="card mb-3 justify-content-center">
  @if ($posts[0]->image)
  <div style="max-height: 700px; overflow:hidden; text-align: center; margin-top: 25px;">
      <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">

  </div>
  @else
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">

  @endif

    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark display-5">{{ $posts[0]->title }}</a></h3>
      <h5>
        <small class="text-dark">
       <h5>
        <small class="text-dark"> By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a></small>
       </h5>
         Kategori <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-success">{{ $posts[0]->category->name }}</a> 
         <p>Diupload Pada <span class="badge bg-warning text-dark">{{ $posts[0]->tanggal }}</span></p></small>
        </h5>
          {{-- <h5> <span class="badge bg-warning text-dark">{{ $posts[0]->jam_mulai }} - {{ $posts[0]->jam_selesai }}</span></h5>
           <p>{{ $posts[0]->created_at->diffForHumans() }}</p>  
          
        
        @if ($posts[0]->harga_diskon)
        <h5>Harga Tiket</h5>
        <h4><span class="badge bg-secondary text-decoration-line-through">Rp.{{ $posts[0]->harga }}</span></h4>
        <h3><span class="badge bg-success">Rp.{{ $posts[0]->harga_diskon }}</span></h3>
        

        @else
        <h5>Harga Tiket</h5>
        <h3><span class="badge bg-secondary text-decoration-none">Rp.{{ $posts[0]->harga }}</span></h3>

        @endif --}}
       
    
      <p class="card-text text-dark">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-outline-dark">Read More</a>


    </div>
  </div>


    <div class="container" >
        <div class="row" >
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3" >
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color : rgba(0, 0, 0, 0.7) "><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                          @if ($post->image)

                              <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">


                          @else
                          <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">

                          @endif

                    <div class="card-body" >
                      <h4 class="card-title text-dark">{{ $post->title }} </h4>
                      <h5>
                        <small class="text-dark">
                          <h5>
                            <small class="text-dark"><p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p></small>
                          </h5>
                          Kategori <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-primary">{{ $post->category->name }}</a> 
                          <small>
                          <span class="badge bg-warning text-dark"> <span>Diupload Pada </span>{{ $post->tanggal }}</span>
                        </small>
                          {{-- <h5><span class="badge bg-warning text-dark mt-2">{{ $post->jam_mulai }} - {{ $post->jam_selesai }}</span></h5> --}}
                          </small>
                        </h5>
                        {{-- @if ($post->harga_diskon)
                          <h5>Harga Tiket</h5>
                          <h4><span class="badge bg-secondary text-decoration-line-through">Rp.{{ $post->harga }}</span></h4>
                          <h3><span class="badge bg-success">Rp.{{ $post->harga_diskon }}</span></h3>
                          

                          @else
                          <h5>Harga Tiket</h5>
                          <h4><span class="badge bg-secondary text-decoration-none">Rp.{{ $post->harga }}</span></h4>

                          @endif             --}}
                      <p class="card-text text-dark">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-outline-dark">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>


@else
  <p class="text-center fs-4 text-dark">Blog tidak ditemukan :(</p>
@endif

    <div class="d-flex justify-content-center">
       {{ $posts->links() }}
    </div>


@endsection