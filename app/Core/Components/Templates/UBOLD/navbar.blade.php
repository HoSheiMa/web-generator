@if ($visible)
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="/home.php">
                @if (isset($navbar_logo) && $navbar_logo)
                    <img src="{{ $navbar_logo }}" alt="LOGO" class="logo-light logo-dark">
                @else
                    <span class="text-white">{{ $navbar_title }}</span>
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                    @foreach ($navbar_menulinks as $link)
                        <li class="nav-item @if (isset($link['active']) && $link['active']) active @endif">
                            <a class="nav-link @if (isset($link['disabled']) && $link['disabled']) disabled @endif" href="{{ $link['link'] }}">{{ $link['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <button class="btn btn-info navbar-btn">Try for Free</button>
            </div>
        </div>
    </nav>
@endif
