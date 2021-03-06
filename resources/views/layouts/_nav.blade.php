<nav id="nav" class="navbar navbar-expand-md navbar-light fixed-top" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item m-2">
                    <a class="nav-link active fw-bold fs-5 text-uppercase" aria-current="page" href="{{ route('welcome') }}">{{ __('ui.home') }}</a>
                </li>
                <li class="nav-item m-2">
                <a class="nav-link active fw-bold fs-5 text-uppercase" href="{{ route('contact') }}">{{ __('ui.contact') }}</a>
                </li>
                <li class="nav-item m-2 dropdown">
                    <a class="nav-link active fw-bold fs-5 dropdown-toggle" href="#" id="dropdown04"
                    data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.categories') }}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item"
                            href="{{route('category.ads',['name'=>$category->name,'id'=>$category->id])}}"><i class='pe-2 {{ $category->icon }}'></i>{{__("ui.{$category->name}")}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item m-2 dropdown list-unstyled">
                    <a class="nav-link active fw-bold fs-5 text-uppercase dropdown-toggle" href="#" id="dropdown04"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li class="d-flex align-items-center justify-content-center">
                            <div>
                                @include('layouts._locale',["lang"=>'es','nation'=>'es'])
                            </div>
                            <span>ES</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-center">
                            <div>
                                @include('layouts._locale',["lang"=>'en','nation'=>'gb'])
                            </div>
                            <span>EN</span>
                        </li>
                        <li class="d-flex align-items-center justify-content-center">
                            <div>
                                @include('layouts._locale',["lang"=>'it','nation'=>'it'])
                            </div>
                            <span>IT</span>
                        </li>
                    </ul>
                </li>
                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item m-2">
                    <a class="nav-link active fs-5 text-uppercase" href="{{ route('revisor.home') }}">{{ __('ui.revisor') }}
                        <span class="badge rounded-pill bg-danger">{{\App\Models\Ad::ToBeRevisionedCount() }}</span>
                    </a>
                </li>
                @endif
                @endauth
            </ul>
            @guest
            <li class="nav-item list-unstyled">
                <a class="nav-link active fw-bold fs-5 text-uppercase text-reset" href="{{ route('login') }}">{{ __('ui.login') }}</a>
            </li>
<<<<<<< HEAD
            <li class="nav-item list-unstyled">
                <a class="nav-link active fs-5 fw-bold text-uppercase text-reset" href="{{ route('register') }}">{{ __('ui.register') }}</a>
            </li>
            @endguest
=======
            <li class="nav-item m-2 dropdown">
                <a class="nav-link active fw-bold fs-5 dropdown-toggle" href="#" id="dropdown04"
                data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.categories') }}</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown04">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item"
                        href="{{route('category.ads',['name'=>$category->name,'id'=>$category->id])}}"><i class='pe-2 {{ $category->icon }}'></i>{{__("ui.{$category->name}")}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link active fw-bold fs-5 text-uppercase" href="{{ route('contact') }}">{{ __('ui.contact') }}</a>
            </li>
            <li class="nav-item m-2 dropdown list-unstyled">
                <a class="nav-link active fw-bold fs-5 text-uppercase dropdown-toggle" href="#" id="dropdown04"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown04">
                    <li class="d-flex align-items-center justify-content-center">
                        <div>
                            @include('layouts._locale',["lang"=>'es','nation'=>'es'])
                        </div>
                        <span>ES</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center">
                        <div>
                            @include('layouts._locale',["lang"=>'en','nation'=>'gb'])
                        </div>
                        <span>EN</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center">
                        <div>
                            @include('layouts._locale',["lang"=>'it','nation'=>'it'])
                        </div>
                        <span>IT</span>
                    </li>
                </ul>
            </li>
            
            <form action="{{ route('search') }}" method="GET" class="d-flex">
                <input class="form-control me-2" type="text" name="q" 
                placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
>>>>>>> d58da2108b9c6114a7f0e0c09d91010522586260
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <li class="nav-item list-unstyled d-flex">
                    <a class="nav-link active fs-5 text-uppercase text-danger" href="">{{auth()->user()->name}}</a>
                    <button class="btn btn-search fw-bold fs-5" type="submit">{{ __('ui.logout') }}</button>
                </li>
            </form>
            @endauth
        </div>
    </div>
</nav>
