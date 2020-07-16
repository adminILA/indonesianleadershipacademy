@extends('master-dashboard')
@section('content')
<section class="content-header">
    <h1>
    Web Information
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
    <li class="active">Blog List</li>
    </ol>
</section>
<section class="content">
    @if(session()->has('message'))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>Social Media Link</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="{{ route('web-info-edit') }}" class="btn btn-info pull-right">Edit</a>
                </div>
            </div>
            <br>
            @foreach ($webInfoData as $item)
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <b>{{ $item->name }}</b>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <a href="{{ $item->value }}"> {{ $item->value }}</a>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
        <div class="col-lg-12">
            <br>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>Account Information</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Email</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    superadmin@indonesianleadershipacademy.com
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Role</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    Super Admin
                </div>
            </div>
        </div>
    </div>
</section>
@endsection