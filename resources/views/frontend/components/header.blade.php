

    <!--====== Header Start ======-->
    <header class="header-area">
        <nav class="navbar navbar-2 navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('frontend/assets/images/logo1.png') }}" alt="Logo">
                    <h2 class="navbar-brand-logo" id="indexlogo">{{ __('words.barqarorlik') }}</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="/" id="indexhome">{{ __('words.home') }}</a></li>
                        <li><a href="#blog" id="indexlang">{{ __('words.til') }}<button class="sub-nav-toggler"> <span></span>
                                </button></a>
                            <ul class="sub-menu">
                                <li><a href="/locale/uz">UZ</a></li>
                                <li><a href="/locale/ru">RU</a></li>
                                <li><a href="/locale/en">ENG</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--====== Header Ends ======-->
