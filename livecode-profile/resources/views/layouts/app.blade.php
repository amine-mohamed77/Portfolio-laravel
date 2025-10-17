<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Portfolio</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <header class="bg-dark text-white text-center py-3">
        <h1>My Portfolio</h1>
    </header>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; {{ date('Y') }} Amin Mohamed. All rights reserved.</p>
    </footer>

</body>
</html>
