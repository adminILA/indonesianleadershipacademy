@extends('master-dashboard')
@section('content')
<section class="content-header">
  <h1>
      Gallery
      <small>Upload Image</small>
  </h1>
  <ol class="breadcrumb">
      <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Gallery</li>
  </ol>
</section>
<section class="content" >
  <div class="row">
    <form action="{{ route('save-image') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="col-lg-12">
        <div class="form-group row">
          <div class="col-lg-2 col-md-2 col-sm-12">
            <label for="Image Title" class="form-control-label">Image Title:</label>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12">
            <input type="text" name="image_title" id="image_title" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-2 col-md-2 col-sm-12">
            <label for="" class="form-control-label">Image File:</label>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12">
            <input type="file" name="image_name" id="image_name"class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-2 col-md-2 col-sm-12">
            <label for="Caption">Caption:</label>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12">
            <input type="text" name="caption" id="caption" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection