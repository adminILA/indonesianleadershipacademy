@extends('master-dashboard')
@section('content')
<section class="content-header">
    <h1>
        Blog
        <small>Edit Blog Post</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Blog</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        @foreach ($blog as $item)
        <form action="{{ route('blog-save-update', [$item->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="col-lg-12">
                <input type="hidden" name="id" value="{{ $item->id }}">
                <div class="form-group row">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <label for="title" class="form-control-label">Blog Post Title*</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <input value="{{ $item->blog_title }}" type="text" name="blog_title" id="title" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <label for="source" class="form-control-label">Original Source (optional)</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <input type="text" name="source" id="source" class="form-control" value="{{ $item->blog_source }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <label for="title" class="form-control-label">Blog Content*</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <textarea name="body" id="blog-content">{{ $item->body }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
        
        
    </div>
</section>
@endsection