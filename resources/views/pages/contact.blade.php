@extends('master')
@section('content')
<section class="content d-flex">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.572522315458!2d106.82619881413726!3d-6.187915662348753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4253f04bd05%3A0x4eca94a88081da60!2sPT.%20Mobiliari%20Stephindo!5e0!3m2!1sen!2sid!4v1567863247938!5m2!1sen!2sid" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<section class="content d-flex flex-row flex-wrap">
    <div class="col-lg-4 bg-blue-primary">
        <div class="p-5 text-white">
            <h4>ADDRESS</h4>
            <h6>PT. Mobiliari Stephindo</h6>
            <p >
              E Trade Building Lantai 8-9, Jl. KH. Wahid Hasyim No. 55, Menteng, Jakarta 10350 - Indonesia
            </p>
            <p>
              admin@indonesianleadershipacademy.com
            </p>
            <p>
                (021) 31906838
            </p>
        </div>
    </div>
    <div class="col-lg-8 bg-picture-3">
        <div class="p-5 text-white">
            <h4>GET IN TOUCH</h4>
            
            <form action="">
                <div class="form-group d-flex row mb-3">
                    <div class="col-lg-4 col-md-12 my-2">
                        <input class="w-100" type="text" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="col-lg-4 col-md-12 my-2">
                        <input  class="w-100" type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="col-lg-4 col-md-12 my-2">
                        <input  class="w-100" type="num" name="phone" id="phone" placeholder="Phone">
                    </div>
                </div>
                <div class="d-flex flex-row mb-3">
                    <textarea class="w-100" name="message" id="message" rows="4"></textarea>
                </div>
                <div class="d-flex flex-row mb-3">
                    <button class="font-weight-bold" type="submit">SEND</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection