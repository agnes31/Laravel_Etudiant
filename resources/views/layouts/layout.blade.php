<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<style>
    .bg-bleu {
        background: #98befa;
    }

    .hover-card:hover {
    transform: scale(1.05); /* Augmente la taille de la carte */
    transition: transform .3s ease-in-out; /* Animation de l'effet de survol */
    }

    .no-underline {
    text-decoration: none !important; /* Enlève le soulignement */
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

</style>
<body>
    <nav class="navbar navbar-expand-lg bg-bleu">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="bi bi-person-circle me-2"></i>Deconnexion</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}"><i class="bi bi-house-door-fill me-2"></i>Home</a>
            <a class="nav-link" href="{{route('etudiant.index')}}"><i class="bi bi-chat-dots-fill me-2"></i>Forum</a>
            <a class="nav-link" href="#"><i class="bi bi-info-circle-fill me-2"></i>About</a>
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
            <div class="alert alert-success">
                {{session('success')}}
            </div>
    @endif
    
    @yield('content')  
</div>
<!-- <footer class="py-3 mt-5 text-dark">
    <p class="text-center pt-3">&copy; {{ date('Y') }} Collège Horizon. Tous droits réservés.</p>
</footer> -->
    
</body>
<footer class="text-center bg-bleu mt-3">
    <div class="container py-3">
            <div class="text-center mt-5">
                <h5>Suivez-nous</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-dark text-decoration-none"><i class="bi bi-facebook"></i> Facebook</a></li>
                    <li><a href="#" class="text-dark text-decoration-none"><i class="bi bi-twitter"></i> Twitter</a></li>
                    <li><a href="#" class="text-dark text-decoration-none"><i class="bi bi-instagram"></i> Instagram</a></li>
                </ul>
                <p class="text-center pt-3">&copy; {{ date('Y') }} Collège Horizon. Tous droits réservés by Agnès Somet.</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

