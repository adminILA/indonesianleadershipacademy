@extends('master-dashboard')
@section('content')
<section class="content-header">
    <h1>
        Blog
        <small>Gallery List</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Gallery</li>
    </ol>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('add-image') }}" class="btn btn-primary">Upload New Image</a>
        </div>
    </div>
</section>
<section class="content">
  <div class="row">
    @if(count($image_list) > 0)
      @foreach($image_list as $item)
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <img src="{{ $item->image_url }}" alt="image" class="img-responsive">
              <p class="lead">{{ $item->caption }}</p>
              <p><b>{{ $item->name }}</b></p>
            </div>
            <ul class="list-group">
              <li class="list-group-item">
                {{ $item->created_at }}
              </li>
              <li class="list-group-item" style="display: flex; justify-content: space-between;">
                <a href="{{ route('edit-image', [$item->id]) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('delete-image', [$item->id]) }}" method="post">
                  <input type="submit" value="Delete" class="btn btn-danger">
                  @csrf
                  @method('delete')
                </form>
              </li>
            </ul>
          </div>
        </div>
      @endforeach
    @else
        <div class="col-lg-12 text-center">
          <div class="alert alert-warning"><h4>No Data Available</h4></div>
        </div>
    @endif
  </div>
</section>
@endsection