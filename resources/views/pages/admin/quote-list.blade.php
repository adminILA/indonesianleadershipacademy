@extends('master-dashboard')
@section('content')
<section class="content-header">
    <h1>
        Quotes List
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
        <li class="active">Quotes List</li>
    </ol>
</section>
<section class="content quotes-list">
    <div class="row">
      <div class="col-sm-12">
        <a href="{{ route('quote-add') }}" class="btn btn-primary">Create New Quote</a>
      </div>
    </div>
    <br>
    @if ($error = Session::get('error'))
    <div class="row">
      <div class="col-sm-12">
        <div class="alert alert-dismissible alert-danger" role="alert">
          {{$error}}
          <button type="button" href="#" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>
    </div>
    @endif
    @if ($success = Session::get('success'))
    <div class="row">
      <div class="col-sm-12">
        <div class="alert alert-dismissible alert-success" role="alert">
          {{$success}}
          <button type="button" href="#" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>
    </div>
    @endif
    <br>
    <div class="row">
      <div class="col-lg-12">
        <form action="{{ route('admin-quote-search') }}" method="get">
          <input type="text" name="searchKey" id="searchQuote" placeholder="Type a keyword" class="form-control mb-2">
          <br>
          <button type="submit" class="btn btn-dark">Search</button>
        </form>
      </div>
    </div>
    <div class="row">
        @if(count($quotes) > 0)
        <div class="col-lg-12">
            @foreach ($quotes as $item)
            <div class="row quotes-item">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <img src="{{$item->quote_image}}" alt="" class="img-responsive">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Title:</b> {{$item->quote_title}}
                    <br>
                    <b>Published on:</b> {{$item->updated_at}}
                    <br>
                    @if($item->main_quotes)
                      <p>Main quotes <span class="glyphicon glyphicon-ok"></span></p>
                    @endif
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                          <p>
                            <b>Quote Author:&nbsp;{{$item->quote_owner}}</b>
                          </p>
                        </div>
                        <div class="col-sm-12">
                            <p>Description:&nbsp;{{$item->quote_desc}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                          <p>
                            <div class="btn btn-block btn-warning">Edit</div>
                          </p>
                        </div>
                        <div class="col-sm-12">
                          <p>
                            <div class="btn btn-block btn-danger">Delete</div>
                          </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>    
            @endforeach
            <div class="row">
                <div class="col-sm-12">
                  <div class="d-flex">
                    {{ $quotes->links() }}
                  </div>
                </div>
            </div>
        </div>
        @else
        <br>
        <div class="col-sm-12">
            <div class="text-center">
                <p class="alert alert-warning">No Data</p>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection