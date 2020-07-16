@extends('master')
@section('content')
<section class="content d-flex my-3">
    <div class="container">
        <h4>BLOGS</h4>
    </div>
</section>
<section class="content d-flex flex-column container">
  <div class="col-sm-12 mb-3 p-0">
    <div class="card-body p-0">
      <h4 class="card-title">Search blogs</h4>
      <form action="{{ route('blog-search') }}" method="get">
        <input type="text" name="searchKey" id="searchBlog" placeholder="Type a keyword" class="form-control mb-2">
        <button type="submit" class="btn btn-dark">Search</button>
      </form>
    </div>
  </div>
  @if (!empty($blogs))
    @foreach ($blogs as $item)
      <div class="d-flex flex-row flex-wrap">
        <div class="jumbotron p-4 p-md-5 text-dark rounded bg-light w-100">
          <div class="col-lg-8 col-md-10 col-sm-12 px-0">
            <h1 class="display-4 text-uppercase">{{ $item->blog_title }}</h1>
            <p class="lead my-3">{{ strip_tags(substr($item->body, 0, 140)) }}...</p>
            <p class="lead mb-0"><a href="{{ route('blog-detail', ['id' => $item->id]) }}" class="text-dark font-weight-bold">Continue reading...</a></p>
          </div>
        </div>
      </div>
    @endforeach
    <div class="row m-0">
      {{ $blogs->links() }}
    </div>
  @else
    <div class="d-flex flex-row flex-wrap mb-5">
      <div class="col-sm-12 text-center">
        <h4>Pencarian tidak ditemukan</h4>
      </div>
    </div>
  @endif
  
</section>
@endsection