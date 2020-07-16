<nav class="navbar navbar-expand-lg navbar-dark navbar-ila">    
    <div class="container">
        <a class="navbar-brand" style="font-size: 14px;" href="{{route('Home')}}">Indonesian Leadership Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li @if(Route::currentRouteName()=='About Us') class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link text-uppercase" href="{{route('About Us')}}">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li @if(Route::currentRouteName()=='Contact') class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link text-uppercase" href="{{route('Contact')}}">Contact</a>
                </li>
                <li @if(Route::currentRouteName()=='Gallery') class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link text-uppercase" href="{{route('Gallery')}}">Gallery</a>
                </li>
                <li @if(Route::currentRouteName()=='Quotes') class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link text-uppercase" href="{{route('Quotes')}}">Privacy Policy</a>
                </li>
                <li @if(Route::currentRouteName()=='blog-detail') class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link text-uppercase" href="{{route('Blogs')}}">Blog</a>
                </li>
                <li class="social-list">
                  <ul class="social-link">
                    <li class="social-item">
                        <a class="text-uppercase social-link" href="https://fb.me/IndonesianLeadershipAcademy" target="_blank"><img src="{{asset('image/vector/facebook.png')}}" alt=""></a>
                    </li>
                    <li class=" social-item">
                        <a class="text-uppercase social-link" href="https://www.instagram.com/indonesianleadershipacademy" target="_blank"><img src="{{asset('image/vector/btn-instagram.svg')}}" alt=""></a>
                    </li>
                    <li class=" social-item">
                        <a class="text-uppercase social-link" href="#" target="_blank"><img src="{{asset('image/vector/btn-twitter.svg')}}" alt=""></a>
                    </li>
                    <li class=" social-item">
                        <a class="text-uppercase social-link" href="#" target="_blank"><img src="{{asset('image/vector/btn-youtube.svg')}}" alt=""></a>
                    </li>
                    <li class=" social-item">
                        <a class="text-uppercase social-link" href="#" target="_blank"><img src="{{asset('image/vector/btn-linkedin.svg')}}" alt=""></a>
                    </li>
                  </ul>
                </li>
            </ul>
        </div>
    </div>
    
</nav>