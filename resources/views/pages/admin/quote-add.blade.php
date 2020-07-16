@extends('master-dashboard')
@section('content')
<section class="content-header">
  <h1>
    Quote
    <small>Add Quote</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Quote</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <form action="{{ route('quote-save') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="col-lg-12">
        <div class="form-group row">
          <div class="col-lg-2 col-md-2 col-sm-12">
            <label for="title" class="form-control-label">Quote Title: *</label>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12">
            <input type="text" name="quote_title" id="quote_title" class="form-control" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-2 col-md-2 col-sm-12">
            <label for="quote_desc" class="form-control-label">Quote Content:*</label>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12">
            <textarea name="quote_desc" id="quote_desc" class="form-control" required></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-2 col-md-2 col-sm-12">
            <label for="quote_owner" class="form-control-label">Quote By:*</label>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12">
            <input type="text" name="quote_owner" id="quote_owner" class="form-control" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-2 col-md-2 col-sm-12">
            <label for="quote_image" class="form-control-label">Quote Image:*</label>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12">
            <input type="file" name="quote_image" id="quote_image" class="form-control" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection