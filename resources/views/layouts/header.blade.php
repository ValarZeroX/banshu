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
                        <a class="nav-link" aria-current="page" href="/{{ app()->getLocale() }}/health">{{
                            __('banshus.health')}}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="/{{ app()->getLocale() }}/conversion">{{
                            __('banshus.other')}}</a>
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
