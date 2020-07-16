@extends('master')
@section('content')
<section class="content d-flex my-3">
    <div class="container">
        <h3>GALLERY</h3>
    </div>
</section>
<section class="content d-flex flex-column mb-3 container">
<div class="card mb-3 quotes" data-aos="fade-in">
    <div class="row no-gutters">
        <div class="col-lg-2 col-md-3 col-sm-12 pl-0 quotes-item">
            <img src="{{asset('image/quotes/sheryl_sandberg_getty_h_2016.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://www.britannica.com/biography/Mother-Teresa/images-videos">
        </div>
        <div class="col-lg-10 col-md-9 col-sm-12">
            <div class="card-body">
                <h4>In the future, there will be no female  my-5ers. There will be just leaders.</h4>
                <hr>
                <p class="card-text font-italic">
                    Sheryl Sandberg
                </p>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3 quotes" data-aos="fade-in">
    <div class="row no-gutters">
        <div class="col-lg-10 col-md-9 col-sm-12 text-right">
            <div class="card-body">
                <h4>I alone cannot change the world, but I can cast a stone across the water to create many ripples</h4>
                <hr>
                <p class="card-text font-italic">
                    Mother Teresa
                </p>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-12 pl-0 quotes-item">
            <img src="{{asset('image/quotes/mother-teresa.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://id.wikipedia.org/wiki/Berkas:Bruce_Lee_as_Kato_1967.jpg">
        </div>
    </div>
</div>
<div class="card mb-3 quotes" data-aos="fade-in">
    <div class="row no-gutters">
        <div class="col-lg-2 col-md-3 col-sm-12 pl-0 quotes-item">
            <img src="{{asset('image/quotes/Mahatma-Gandhi.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://www.britannica.com/biography/Mother-Teresa/images-videos">
        </div>
        <div class="col-lg-10 col-md-9 col-sm-12">
            <div class="card-body">
                <h4>Find yourself in the service of others</h4>
                <hr>
                <p class="card-text font-italic">
                    Mahatma Gandhi
                </p>
            </div>
        </div>
    </div>
</div>
</section>
<section class="content d-flex mb-3" style="min-height: 500px;">
    <div class="container d-flex justify-content-center">
        <div class="w-100 flex-row d-flex flex-wrap justify-content-between">
            @if(isset($images))
              @foreach ($images as $item)
                <div class="gallery-item position-relative p-2 mb-2">
                  <a href="{{ $item->image_url }}" data-toggle="lightbox" data-footer="{{$item->caption}}">
                        <img src="{{ $item->image_url }}" alt="" class="gallery-image">
                    </a>
                </div>
              @endforeach
            @else
              
            @endif
    </div>
</section>
<script>

</script>
@endsection