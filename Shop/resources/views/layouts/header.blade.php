<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">@lang('main.home_l')</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">@lang('main.category_l')</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="/item/category/1">@lang('main.shirt_l')</a></li>
                                <li class="nav-item"><a class="nav-link" href="/item/category/2">@lang('main.jeans_l')</a></li>
                                <li class="nav-item"><a class="nav-link" href="/item/category/3">@lang('main.shoes_l')</a></li>
                                <li class="nav-item"><a class="nav-link" href="/item/category/5">@lang('main.hoody_l') </a></li>
                                <li class="nav-item"><a class="nav-link" href="/item/category/4">@lang('main.sneakers_l')</a></li>
                                <li class="nav-item"><a class="nav-link" href="/item/category/6">@lang('main.blouse_l')</a></li>
                            </ul>
                        <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">@lang('main.news_l')</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('teleg') }}">@lang('main.contact_l')</a></li>


                        <li class="nav-item submenu dropdown">

                            @guest
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">@lang('main.open_l')</a>
                                <ul class="dropdown-menu">
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">@lang('main.login_l')</a>
                                        </li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">@lang('main.register_l')</a>
                                        </li>
                                    @endif
                                </ul>

                                @else
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false">{{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('user.edit') }}">
                                            @lang('main.edit_l')
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('password.edit') }}">
                                            @lang('main.change_l')
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                            @lang('main.log_l')
                                        </a>
                                    </li>




                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            @endguest


                        </li>
                    </ul>

                    <ul class="nav-shop">
                        <li class="nav-item"><a class="nav-link" href="{{route('locale', __('main.set_lang'))}}">@lang('main.set_lang')</a></li>
                        <li class="nav-item"><button><i class="ti-search"></i></button></li>
                        <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>

                    </ul>

                </div>


            </div>
        </nav>
    </div>
</header>





