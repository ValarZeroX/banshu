<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/js/app.js'])
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CV3LRT7NNV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CV3LRT7NNV');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-scroll navbar-dcode">
            <div class="container">
                <a class="navbar-brand logo" href="/{{ app()->getLocale() }}"><span
                        style="color: #000000;">B</span><span style="color: #5e9693;">anshus</span></a>
                <button class="navbar-toggler ps-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="material-icons-outlined">menu</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="/{{ app()->getLocale() }}/conversion">{{
                                __('banshus.conversion_calculator')}}</a>
                        </li>
                    </ul>
                    <div class="ms-auto mb-2 mb-lg-0">
                        <select class="form-select" id="languageSelect">
                            @foreach(config('app.available_locales') as $locale => $name)
                            <option value="{{$locale}}" {{ app()->getLocale() == $locale ?
                                'selected' : '' }}>
                                {{ $name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <a class="nav-link px-2" href="#!">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="#!">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2" href="#!">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main id="main">
        @yield('main')
    </main>
    <footer class="footer mt-auto py-3 bg-light footer-box">
        <div class="container">
            <div class="row row-cols-3">
                <div class="col">
                    <div class="text-left text-muted">語言</div>
                    <div class="text-left"><a href="/en">English</a> <a href="/zh-hant">繁體中文</a></div>
                </div>
                <div class="col">
                </div>
                <div class="col">
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row row-cols-3">
                <div class="col">
                </div>
                <div class="col">
                    <div class="text-muted">Copyright ©2024 Banshu Inc.</div>
                </div>
                <div class="col">
                    <a href="/{{ app()->getLocale() }}/disclaimer">{{ __('banshus.disclaimer')}}</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>