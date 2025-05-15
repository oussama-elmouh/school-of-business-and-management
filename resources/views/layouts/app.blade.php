<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mon Application')</title>
    <script src="https://cdn.tailwindcss.com"></script>
     
</head>
<body>

    <x-nav-link /> <!-- composant de navigation -->

    <main>
        @yield('content')
    </main>

       
        @yield('tableau')
    

</body>
</html>


