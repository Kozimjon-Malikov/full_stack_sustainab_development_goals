<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ckeditor/contents.css') }}">
    <link rel="stylesheet" href="{{ asset('ckeditor/samples/css/samples.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontawesome.min.css') }}">
</head>

<body>
    <main class="d-flex flex-nowrap">
        <h1 class="visually-hidden">Admin</h1>
        <div style="height: 250vh" class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-bg-dark"
            style="width: 380px;">
            <a href="/" class="text-white text-left" style="position: relative;left:30px">

                <div class="d-block">
                    <span class="fs-4 text-center">Admin</span>

                </div>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('tarjima.index') }}" class="nav-link text-white" aria-current="page">
                        <span><i class="fa fa-pen mx-2"
                                style="font-size: 14px;position: relative;top:-2px"></i>Tarjima</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link text-white" aria-current="page">
                        <span><i class="fa fa-home mx-2" style="font-size: 14px;position: relative;top:-2px"></i>Bosh
                            sahifa</span>

                    </a>
                </li>
                <li>
                    <a href="{{ route('sdg-category.index') }}" class="nav-link text-white">

                        <span><i class="fa fa-list mx-2" style="font-size: 14px;position: relative;top:-2px"></i>SDG
                            nomlari (category)</span>

                    </a>
                </li>
                <li>
                    <a href="{{ route('pages.index') }}" class="nav-link text-white">

                        <span><i class="fa fa-cube mx-2" style="font-size: 14px;position: relative;top:-2px"></i>SDG
                            editor main content</span>

                    </a>
                </li>
                <li>
                    <a href="{{ route('banner.index') }}" class="nav-link text-white">
                        <span><i class="fa fa-envelope mx-2"
                                style="font-size: 14px;position: relative;top:-2px"></i>Banner</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('news.index') }}" class="nav-link text-white">
                        <span><i class="fa fa-book mx-2"
                                style="font-size: 14px;position: relative;top:-2px"></i>News</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cards.index') }}" class="nav-link text-white">
                        <span><i class="fa fa-book mx-2"
                                style="font-size: 14px;position: relative;top:-2px"></i>Cards</span>
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                        class="rounded-circle me-2">
                    <strong>
                        {{ Auth::user()->name }}
                    </strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">
                            <span>
                                <i class="fa fa-user"></i>
                                {{ Auth::user()->name }}
                            </span>
                        </a></li>
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Settings</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-warning">Logout</button>
                        </form>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-md-8 m-2">
            @yield('section_content')
        </div>
    </main>
    <script src="{{ asset('admin/bundle.js') }}"></script>
    <script src="{{ asset('ckeditor/jquery_admin.js') }}"></script>

    <!-- CK Editor -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor_uz', {
            filebrowserBrowseUrl: '/elfinder/ckeditor', // Adjust the URL
            // Other CKEditor options...

        });
    </script>
    <script>
        CKEDITOR.replace('body')
    </script>
    <script>
        CKEDITOR.replace('editor_ru', {
            filebrowserBrowseUrl: '/elfinder/ckeditor', // Adjust the URL
            // Other CKEditor options...
        });
    </script>
    <script>
        CKEDITOR.replace('editor_en', {
            filebrowserBrowseUrl: '/elfinder/ckeditor', // Adjust the URL
            // Other CKEditor options...
        });
    </script>
</body>


</html>
