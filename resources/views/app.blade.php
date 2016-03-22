<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>@yield('title', 'CanRover')</title>
        <link rel="stylesheet" href="/css/app.min.css">
    </head>
    <body>
        <div class="top-bar">
            <div class="top-bar-left row align-middle">
                <ul class="horizontal menu">
                    <li class="hide-for-large">
                        <span class="menu-icon dark" data-toggle="menu"></span>
                    </li>
                    <li>
                        <div class="logo logo--navigation">
                            <?php echo @file_get_contents("img/CanRover Logo.svg"); ?>
                        </div>
                    </li>
                    <li id="site-title">CanRover</li>
                </ul>

                @if (!Auth::guest())
                    <div class="show-for-medium">
                        <ul class="dropdown menu" style="margin-left: 20px;" data-dropdown-menu data-options="closeOnClick: true; autoclose: false; disableHover: true; clickOpen: true;">
                            <li>
                                <a href="#">{{ Auth::user()->name }}</a>
                                <ul class="menu">
                                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ url('/articles/create') }}">Create Article</a></li>
                                    <li><a href="{{ url('/register') }}">Register new user</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
            
            <div class="top-bar-right">
                <nav class="small-12 columns hide hide-for-large" id="menu" data-toggler=".hide">
                    @yield('navigation.top-bar-small', '
                        <div class="row medium-nav align-center" style="width: 100%;">
                            <div class="small-12 medium-5 columns medium-nav__button"><a href="/" data-toggle="menu"><i class="fa fa-home"></i> Home</a></div>
                            <div class="small-12 medium-5 columns medium-nav__button"><a href="/articles" data-toggle="menu"><i class="fa fa-newspaper-o"></i> News</a></div>
                            <div class="small-12 medium-5 columns medium-nav__button"><a href="/album" data-toggle="menu"><i class="fa fa-picture-o"></i> Gallery</a></div>
                        </div>
                    ')
                </nav>        

                <nav class="show-for-large">
                    @yield('navigation.top-bar-large', ' 
                        <ul class="horizontal menu navigation">
                            <li class="navigation__button">
                                <a href="/"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="navigation__button">
                                <a href="/articles"><i class="fa fa-newspaper-o"></i> News</a>
                            </li>
                            <li class="navigation__button">
                                <a href="/album"><i class="fa fa-picture-o"></i> Gallery</a>
                            </li>
                        </ul>
                        ')
                </nav>
            </div>
        </div>

            <div class="container wrapper">
                @yield('header')

                @yield('content')
            </div>

        <footer>
            <div class="container">
                <div class="row align-middle">
                    <div class="columns">
                            <nav>
                                <div class="row">
                                    <ul class="vertical menu footer-navigation">
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="#about"  href="#about" class="footer-navigation__link">About</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="#team"  href="#about" class="footer-navigation__link">Team</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="#missions" href="#about" class="footer-navigation__link">Missions</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="#outreach" href="#about" class="footer-navigation__link">Outreach</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="#acknowledgements" href="#about" class="footer-navigation__link">Acknowledgements</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="#sponsors" href="#about" class="footer-navigation__link">Sponsors</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="#contactus" href="#about" class="footer-navigation__link">Contact us</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="#news" class="footer-navigation__link">News</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-12 columns">
                                            <a href="#gallery" class="footer-navigation__link">Gallery</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                    </div>
                    <div class="columns">
                        <p class="copyright">© 2016 Armadillo, Inc</p>
                    </div>
                    @yield('footer')
                </div>
            </div>
            <script type="text/javascript" src="/js/app.min.js"></script>
            @yield('scripts.footer')
            @include('partials/flash')
        </footer>
    </body>
</html>
