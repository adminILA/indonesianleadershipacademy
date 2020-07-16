@extends('master-dashboard')
@section('content')
<section class="content-header">
    <h1>
        Blog
        <small>Blog List</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Blog</li>
    </ol>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('blog-add') }}" class="btn btn-primary">Create New Blog</a>
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-12">
        <form action="{{ route('admin-blog-search') }}" method="get">
          <input type="text" name="searchKey" id="searchBlog" placeholder="Type a keyword" class="form-control mb-2">
          <br>
          <button type="submit" class="btn btn-dark">Search</button>
        </form>
      </div>
    </div>
</section>
    <section class="content">
        <div class="row">
            @if(count($blogs) > 0)
                @foreach ($blogs as $item)
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="panel panel-default">
                        <a href="#">
                            <div class="panel-heading line-clamp" style="max-height: 85px; min-height: 85px;"><h3>{{ $item->blog_title }}</h3></div>
                            <div class="panel-body">
                                <p class="lead">Author: {{ $item->name }}</p>
                            </div>
                        </a>
                        <ul class="list-group">
                            <li class="list-group-item">
                                {{ $item->created_at }}
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('blog-edit', [$item->id]) }}" class="btn btn-warning">Edit</a>
                                <form style="display: inline" action="{{route('delete-blog', [$item->id])}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                                <!-- <a href="{{ route('delete-blog', [$item->id]) }}" class="btn btn-danger">Delete</a> -->
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
                <div class="col-sm-12">
                  <div class="d-flex">
                    {{ $blogs->links() }}
                  </div>
                </div>
            @else
                <div class="text-center">
                    <p class="alert alert-warning">No Data</p>
                </div>
            @endif
        </div>
    </section>
@endsection