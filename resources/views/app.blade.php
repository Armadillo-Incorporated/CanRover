<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CanRover</title>
        <link rel="stylesheet" href="/css/app.min.css">
    </head>
    <body>
        <div class="top-bar">
            <div class="top-bar-left">
                <a href="/">
                    <ul class="horizontal menu">
                        <li>
                            <div class="logo logo--navigation">
                                <?php echo file_get_contents("img/CanRover Logo.svg"); ?>
                            </div>
                        </li>
                        <li>CanRover</li>
                    </ul>
                </a>
            </div>
            <div class="top-bar-right">
                <nav data-magellan>
                    <ul class="horizontal menu navigation">
                        <li class="navigation__button"><a href="{{BASE_URL}}#about">About</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#team">Team</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#missions">Missions</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#outreach">Outreach</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#acknowledgements">Acknowledgements</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#sponsors">Sponsors</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#contactus">Contact us</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}/news" class="news">News</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container">
            @yield('header')

            @yield('content')

        </div>
        <footer>
            @yield('footer')
            <div class="container">
                <div class="row align-middle">
                    <div class="columns">
                            <nav data-magellan>
                                <div class="row">
                                    <ul class="vertical menu footer-navigation">
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="{{BASE_URL}}#about"  href="{{BASE_URL}}#about" class="footer-navigation__link">About</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="{{BASE_URL}}#team"  href="{{BASE_URL}}#about" class="footer-navigation__link">Team</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="{{BASE_URL}}#missions" href="{{BASE_URL}}#about" class="footer-navigation__link">Missions</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="{{BASE_URL}}#outreach" href="{{BASE_URL}}#about" class="footer-navigation__link">Outreach</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="{{BASE_URL}}#acknowledgements" href="{{BASE_URL}}#about" class="footer-navigation__link">Acknowledgements</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="{{BASE_URL}}#sponsors" href="{{BASE_URL}}#about" class="footer-navigation__link">Sponsors</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="{{BASE_URL}}#contactus" href="{{BASE_URL}}#about" class="footer-navigation__link">Contact us</a>
                                        </li>
                                        <li class="footer-navigation__button small-12 medium-6 columns">
                                            <a href="{{BASE_URL}}/news" class="footer-navigation__link">News</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                    </div>
                    <div class="columns">
                        <p class="copyright">© 2016 Armadillo, Inc</p>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="/js/app.min.js"></script>
        </footer>
    </body>
</html>
