<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="YouTube Thumbnail Image Downloader">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="robots" content="index, follow">
    <title>
        Youtube Thumbnail dl
    </title>
    <meta name="description"
        content="Access high-quality YouTube thumbnails for free with our YouTube Thumbnail dl. Instantly download eye-catching video thumbnails for your needs">
    <!-- Bootstrap core CSS -->
    <link rel="canonical" href="{{ route('home') }}" />
    <meta content='{{ route('home') }}' property='og:url' />
    <meta content='Youtube Thumbnail dl | Download high quality youtube thumbnail for free' property='og:title' />
    <meta
        content="Access high-quality YouTube thumbnails for free with our YouTube Thumbnail dl. Instantly download eye-catching video thumbnails for your needs"
        property='og:description' />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZDDBGBFMCS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-ZDDBGBFMCS');
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
</head>

<body>
    <div class="container">
        <nav class="navbar sticky-top navbar-expand-lg bg-dark">
            <h1 class="navbar-brand"> Youtube Thumbnail dl </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Blogs</a> --}}
                        
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('privacy-policy') }}">Privacy Policy</a>
                </ul>
            </div>
        </nav>
        @yield('content')
        @include('footer')
    </div>
</body>
<script>
    window.S_BASE_URL = "{{ url('/') }}"
</script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</html>
