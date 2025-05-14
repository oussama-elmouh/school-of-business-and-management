<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion Scolaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="#">SchoolManagement</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                 <li class="nav-item"><a class="nav-link" href="{{ route('eleves.index') }}">Élèves</a></li>
              {{--  <li class="nav-item"><a class="nav-link" href="{{ route('professeurs.index') }}">Professeurs</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cours.index') }}">Cours</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('filieres.index') }}">Filières</a></li> --}}
            </ul>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
        @yield('contente')
    </main>
</body>
</html>
