<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="/public/css/app.css">
    <!-- Styles -->
    <link rel="stylesheet" href="/public/assets/css/font-awsome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        p{
            font-family: "Regular";
            font-size: 1.25rem !important;
            text-indent: 50px;
            line-height: 125%;
            margin-bottom: 4vh;
            overflow: hidden;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .alllogo_img{
            margin: 25px 25px;
        }
        .follow-me {
            z-index: 1001;
            position: fixed;
            left: 0;
            top: calc(50% - (110px / 2));
            width: 55px;
            height: 120px;
            display: flex;
            justify-content: center;
            overflow: hidden;
            text-align: center;
            background-color: #2f2f2f;
            font-size: 1em;
        }

        .follow-me a {
            font-family: MontSerrat, Tahoma, Arial, sans-serif;
            font-weight: 700;
            font-size: inherit;
            color: inherit;
            text-decoration: none;
        }


        .follow-me  ul {
            padding-left: 20px;
            list-style: none;
        }

        .follow-me li {
            display: list-item;
            text-align: -webkit-match-parent;
        }

        .follow-me {
            z-index: 1001;
            position: fixed;
            left: 0;
            width: 55px;
            height: 120px;
        }

        .follow-me a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            padding-left: 0px;
            margin-left: -20px;
        }

        .follow-me span {
            display: block;
            width: 35px;
            height: 35px;
            background: url(storage/images/icons.svg) no-repeat 0 1px;
            background-size: 100% auto;
            text-indent: -9999em;
        }

        .follow-me .github {
            background-color: #4e545a;
        }

        .follow-me .github span {
            background-position: 0 -35px;
        }
        .follow-me .linkedin {
            background-color: #0077ba;
        }

        .follow-me .linkedin span {
            background-position: 0 -140px;
        }
        
        .hereiam{
            width:100%;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .myintro{
            width:100%;
            padding-top: 50px;
            padding-bottom: 50px;
            color:#fff;
            background-color: #2f2f2f;
        }
        .myintro2{
            width:100%;
            padding-top: 50px;
            padding-bottom: 50px;
            color:#fff;
            background-color: #2f2f2f;
        }
        .somelogo{
            width:100%;
            padding-top: 50px;
            padding-bottom: 50px;
            color:#000000;
        }
        .footersect{
            background-color: #000000;
            color: #fff;
            font-size: 1em;
        }

        ::-webkit-scrollbar {
            width: 6px;
            border-left: 1px solid #E6ECF8;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Korntatan Kulkirti</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @yield('homeNav')
                @yield('aboutNav')
                @yield('showcase')
            </ul>
        </div>
    </nav>
    <div class="follow-me">
            <ul>

                <li>
                    <a class="github" target="_blank" href="https://github.com/TikkiK/" title="Follow on GitHub">
                        <span>Follow on Github</span>
                    </a>
                </li>
                <li>
                    <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/korntatan" title="Connect on Linkedin">
                        <span>Connect on Linkedin</span>
                    </a>
                </li>
            </ul>
        </div>
        
    <div class="container flex-center position-ref full-height">
        
    </div>

    <div class="container">
        @yield('content')
    </div>
    <div class="container">
        @yield('hello')
    </div>
    <div class="pageall">
            <section class="hereiam is-white has-text-centered">
                <div class="hereiam-body">
                    <div class="container">
                        <div class="columns is-centered">
                            <div class="column">
                                <div class="py-5 text-center">
                                        @yield('logo')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="myintro is-medium is-primary has-text-centered is-long">
                <div class="myintro-body">
                    <div class="container">
                        <div class="columns is-centered">
                            <div class="column">
                                <div class="py-5 ">
                                    <div class="text-center">
                                            @yield('beginIntro')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="somelogo is-medium is-primary has-text-centered is-long">
                    <div class="somelogo-body">
                        <div class="container">
                            <div class="columns is-centered">
                                <div class="column">
                                    <div class="py-5 ">
                                        <div class="text-center">
                                            @yield('alllogo')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <section class="myintro2 is-medium is-primary text-centered is-long">
                    <div class="myintro2-body">
                        <div class="container">
                            <div class="columns is-centered">
                                <div class="column">
                                    <div class="py-5 ">
                                        <div>
                                                @yield('beginIntro2')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

    {{-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
    @else
    <a href="{{ route('login') }}">Login</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}">Register</a>
    @endif
    @endauth
    </div>
    @endif
    </div> --}}
    <footer class="footersect is-primary is-small has-text-centered">
            <div class="container is-narrow">
              <div class="columns is-centered"> 
                <div class="column is-one-third">
                  @yield('footer')
                </div>
              </div>

          </footer>
    <script src="js/app.js" charset="utf-8"></script>
</body>
</html>
