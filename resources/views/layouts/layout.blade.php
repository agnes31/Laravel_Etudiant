<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
</head>
<style>
    .bg-bleu {
        background: #98befa;
    }

    .hover-card:hover {
        transform: scale(1.05);
        /* Augmente la taille de la carte */
        transition: transform .3s ease-in-out;
        /* Animation de l'effet de survol */
    }

    .no-underline {
        text-decoration: none !important;
        /* Enlève le soulignement */
    }

    .bg-gradient-primary {
        background: linear-gradient(to right, #7c9dc1e0, #66ffb2);
    }

    .bg-gradient-secondary {
        background: linear-gradient(to right, #86b7fe, #f5e2e2);
    }

    .bg-gradient-success {
        background: linear-gradient(to right, #28a745, #61ff75);
    }

    .bg-gradient-danger {
        background: linear-gradient(to right, #ffc107, #ff6b6b);
    }

    .bg-gradient-warning {
        background: linear-gradient(to right, #ffc107, #ffe677);
    }

    .bg-gradient-info {
        background: linear-gradient(to right, #17a2b8, #68d8d6);
    }

    .bg-gradient-primary {
        background: linear-gradient(to right, #7c9dc1e0, #66ffb2);
    }

    .bg-gradient-danger {
        background: linear-gradient(to right, #ffc107, #ff6b6b);
    }

    .circle-flag {
        border-radius: 50%;
        overflow: hidden;
        display: inline-block;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-bleu">
        <div class="container-fluid">
            @php $locale = session()->get('locale') @endphp

            <a class="navbar-brand  me-3 ms-3" href="#">
                <i class="bi bi-person-square me-2"></i>
                @lang('lang.text_hello') {{Auth::user() ? Auth::user()->name : "Guest"}}
            </a>
            <a class="nav-link @if($locale == 'en') bg-info @endif" href="{{route('lang', 'en')}}">En&nbsp;<i class="flag flag-united-states circle-flag"></i></a>
            <a class="nav-link @if($locale == 'fr') bg-info @endif" href="{{route('lang', 'fr')}}">Fr&nbsp;<i class="flag flag-france circle-flag"></i></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    @guest
                    <a class="nav-link me-3" href="{{route('registration')}}"><i class="bi bi-patch-plus me-2"></i>@lang('lang.text_registration')</a>
                    <a class="nav-link me-3" href="{{route('login')}}"><i class="bi bi-door-open me-2"></i>@lang('lang.text_login')</a>
                    @else
                    <a class="nav-link me-3" href="{{route('forum.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 100 100">
                            <path d="M50 10 L90 90 L10 90 Z" fill="#3498db" fill-rule="evenodd" />
                        </svg>
                        Forum
                    </a>
                    <a class="nav-link me-3" href="{{route('fileManager.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-arrow-down-fill" viewBox="0 0 16 16">
                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5" />
                        </svg>
                        @lang('lang.text_doct')
                        <a class="navbar-brand" href="{{route('logout')}}">
                            <i class="bi bi-door-open-fill"></i>
                            @lang('lang.text_logout')
                        </a>

                        @endguest
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-4">
                    {{ config('app.name')}}
                </h1>
            </div>
        </div>
        <hr>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session('errors'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Vous n'avez pas les permissions.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @yield('content')

    </div>
</body>

<footer class="text-center bg-bleu mt-3">
    <div class="container py-3">
        <div class="text-center mt-5">
            <h5>@lang('lang.text_footer3')</h5>
            <ul class="list-unstyled">
                <li><a href="#" class="text-dark text-decoration-none"><i class="bi bi-facebook"></i> Facebook</a></li>
                <li><a href="#" class="text-dark text-decoration-none"><i class="bi bi-twitter"></i> Twitter</a></li>
                <li><a href="#" class="text-dark text-decoration-none"><i class="bi bi-instagram"></i> Instagram</a></li>
            </ul>
            <p class="text-center pt-3">&copy; {{ date('Y') }} Collège Horizon. @lang('lang.text_footer') @lang('lang.text_footer2').</p>
        </div>
    </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>