<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand fixed-top navbar-dark bg-dark" id="topNavbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">eBook</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown" id="metaDropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @lang('app.discover')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @for ($i = 0; $i < 20; $i++)
                            <a class="dropdown-item" href="{{ route('meta', ['slug' => 'test']) }}">Category name</a>
                            @endfor
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">@lang('app.create')</a>
                    </li>
                </ul>
                {!! Form::open(['url' => 'foo/bar', 'class' => 'form-inline d-none d-md-inline-block my-2 my-lg-0 mx-3
                flex-grow-1 ', 'id' => 'navbarSearch']) !!}
                {!! Form::text('q', '', ['class' => 'form-control', 'placeholder' => __('app.search_stories_and_people')])
                !!}
                {!! Form::close() !!}
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">@lang('app.log_in')</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">@lang('app.sign_up')</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main id="app-container">
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <ul id="footer-items" class="d-flex justify-content-center" role="navigation">
                <li><a href="#" rel="nofollow">@lang('app.language')</a></li>
                <li><a href="#" rel="nofollow">@lang('app.about_us')</a></li>
                <li><a href="#" rel="nofollow">@lang('app.terms')</a></li>
                <li><a href="#" rel="nofollow">@lang('app.privacy')</a></li>
                <li><a href="#">@lang('app.help')</a></li>
                <li>© {{ now()->format('Y') }} {{ config('app.name') }}</li>
            </ul>
        </div>
    </footer>
    @section('modal')
    <div class="modal fade" id="storyPreviewModal" tabindex="-1" role="dialog" aria-labelledby="storyPreviewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>
    @show
    <script>
        var ebook = window.ebook = (ebook || {});
        ebook.base_url = '{{ url('/') }}';
    </script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/holderjs/holder.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
