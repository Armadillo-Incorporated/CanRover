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
                <ul class="dropdown menu">
                    <li>

                    </li>
                    <li><a href="/">CanRover</a></li>
                </ul>
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
            <script type="text/javascript" src="/js/app.min.js"></script>
        </footer>
    </body>
</html>
