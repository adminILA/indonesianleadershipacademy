@extends('master-dashboard')
@section('content')
<section class="content-header">
        <h1>
        Web Information <small>Edit Web Information</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
        <li class="active"><a href="{{ route('web-info') }}">Web Information</a></li>
        </ol>
    </section>
<section class="content">
    @if($errors->any())
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger">
                    Update failed. Please try again.
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h4>Social Media Link</h4>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('web-info-edit-save') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <b>{{ $webInfoData[0]->name }}</b>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input type="text" name="value" class="form-control" value="{{ $webInfoData[0]->value }}">
                        <input type="hidden" name="id" value="{{ $webInfoData[0]->id }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{ route('web-info') }}" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection