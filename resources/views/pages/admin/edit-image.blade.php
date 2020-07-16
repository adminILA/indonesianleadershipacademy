@extends('master-dashboard')
@section('content')
<section class="content-header">
    <h1>
        Gallery
        <small>Edit Image</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Image</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        @foreach ($image as $item)
        <form action="{{ route('image-save-update', [$item->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-lg-12">
                <input type="hidden" name="id" value="{{ $item->id }}">
                <div class="form-group row">
                  <div class="col-lg-2 col-md-2 col-sm-12">
                    <label for="Image Title" class="form-control-label">Image Title:</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-12">
                    <input type="text" name="image_title" id="image_title" class="form-control" value="{{ $item->image_title }}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-2 col-md-2 col-sm-12">
                    <label for="" class="form-control-label">Image File:</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-12">
                    <img src="{{ $item->image_url }}" alt="image" class="img-fluid"> <br>
                    <input type="file" name="image_name" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-2 col-md-2 col-sm-12">
                    <label for="Caption">Caption:</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-12">
                    <input type="text" name="caption" id="caption" class="form-control" value="{{ $item->caption }}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-2 col-md-2 col-sm-12">
                    <label for="created_at">Created at:</label>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-12">
                    <span>{{ $item->created_at }}</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <a href="{{ route('gallery-list') }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Upload</button>
                  </div>
                </div>
            </div>
        </form>
        @endforeach
        
        
    </div>
</section>
@endsection