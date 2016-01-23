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
        <title>CanRover</title>
        <link rel="stylesheet" href="/css/app.min.css">
    </head>
    <body>
        <div class="top-bar">
            <div class="top-bar-left">
                    <ul class="horizontal menu">
                        <li>
                            <button class="menu-icon hide-for-large" type="button" data-toggle="medium-nav"></button>
                            <div class="dropdown-pane" id="medium-nav" data-dropdown>
                                <ul class="vertical menu medium-nav" data-magellan>
                                    <li class="medium-nav__button"><a href="#about">About</a></li>
                                    <li class="medium-nav__button"><a href="#team">Team</a></li>
                                    <li class="medium-nav__button"><a href="#missions">Missions</a></li>
                                    <li class="medium-nav__button"><a href="#outreach">Outreach</a></li>
                                    <li class="medium-nav__button"><a href="#acknowledgements">Acknowledgements</a></li>
                                    <li class="medium-nav__button"><a href="#sponsors">Sponsors</a></li>
                                    <li class="medium-nav__button"><a href="#contactus">Contact us</a></li>
                                    <li class="medium-nav__button"><a href="#news">News</a></li>
                                    <li class="medium-nav__button"><a href="#gallery">Gallery</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="logo logo--navigation">
                                <?php echo file_get_contents("img/CanRover Logo.svg"); ?>
                            </div>
                        </li>
                        <li id="site-title">CanRover</li>
                    </ul>
            </div>
            <div class="top-bar-right">
                    <nav class="show-for-large">
                        <ul class="horizontal menu navigation" data-magellan data-options="deepLinking: true; barOffset: 20; threshold: 90;">
                            <li class="navigation__button"><a href="#about">About</a></li>
                            <li class="navigation__button"><a href="#team">Team</a></li>
                            <li class="navigation__button"><a href="#missions">Missions</a></li>
                            <li class="navigation__button"><a href="#outreach">Outreach</a></li>
                            <li class="navigation__button"><a href="#acknowledgements">Acknowledgements</a></li>
                            <li class="navigation__button"><a href="#sponsors">Sponsors</a></li>
                            <li class="navigation__button"><a href="#contactus">Contact us</a></li>
                            <li class="navigation__button"><a href="#news">News</a></li>
                            <li class="navigation__button"><a href="#gallery">Gallery</a></li>
                        </ul>
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
        </footer>
    </body>
</html>
