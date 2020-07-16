@extends('master-dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            Dashboard
            <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$totalBlog}}</h3>
        
                        <p>Blogs</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-document"></i>
                    </div>
                    <a href="{{route('blog-list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{$totalImage}}</h3>
        
                        <p>Images</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('gallery-list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <!-- <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>{{$totalQuote}}</h3>
        
                        <p>Quotes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-quote"></i>
                    </div>
                    <a href="{{route('quote-list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div> -->
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">

            </div>
        </section>

        <section class="content-header">
          <h1>Quick Action</h1>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-lg-4 col-sm-12">
              <a href="{{route('blog-add')}}" class="text-dark">
                <div class="quick-action-box">
                  <div class="quick-action-icon">
                    <i class="ion ion-android-document"></i>
                  </div>
                  <div class="quick-action-content">
                    <h3>Write New Blog&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-12">
              <a href="{{route('add-image')}}" class="text-dark">
                <div class="quick-action-box">
                  <div class="quick-action-icon">
                      <i class="ion ion-quote"></i>
                  </div>
                  <div class="quick-action-content">
                    <h3>Upload New Image&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></h3>
                  </div>
                </div>
              </a>
            </div>
            {{-- <div class="col-lg-4 col-sm-12">
              <a href="{{route('quote-add')}}" class="text-dark">
                <div class="quick-action-box">
                  <div class="quick-action-icon">
                      <i class="ion ion-quote"></i>
                  </div>
                  <div class="quick-action-content">
                    <h3>Write New Quote&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></h3>
                  </div>
                </div>
              </a>
            </div> --}}
          </div>
        </section>
        <!-- /.content -->
    
    <!-- /.content-wrapper -->
@endsection