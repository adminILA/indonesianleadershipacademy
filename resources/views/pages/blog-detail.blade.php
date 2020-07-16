@extends('master')
@section('content')
<section class="blog-banner w-100">
  <img src="{{ asset('image/vector/blog-banner.svg') }}" alt="blog banner" class="img-fluid w-100">
</section>
<section class="blog-content px-3 my-5">
  <h1>{{ $blog->blog_title }}</h1>
  <small><a href="{{ $blog->blog_source }}">Source: {{ $blog->blog_source }}</a></small>
  <br>
  <small>{{ $blog->blog_author }} || {{ \Carbon\Carbon::parse($blog->updated_at)->format('d-M-Y') }}</small>
  <hr>
  {!! $blog->body !!}
</section>
@endsection