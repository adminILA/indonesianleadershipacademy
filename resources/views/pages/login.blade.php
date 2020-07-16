<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700|Open+Sans:300,400,600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8505c87347.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ILA Admin</title>
</head>
<body>
    <div class="container h-100 ">
        <div class="d-flex justify-content-center align-items-center login-panel">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card my-5">
                    <div class="card-header">
                        <h3>Login to Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('do-login') }}" method="post">
                            @csrf
                            @if($errors->any())
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <div class="alert alert-danger">
                                            Wrong Credentials
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            <div class="form-group row">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label for="email" class="form-control-label">Email</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Administrator email...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <label for="password" class="form-control-label">Password</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Secret passcode...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary mx-auto my-3">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="footer fixed-bottom text-center">
            &copy; 2019 Muhammad Shafrizal
        </div>
    </div>
</body>
</html>