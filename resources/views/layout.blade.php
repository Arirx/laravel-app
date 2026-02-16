<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark text-white">
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom"> <a href="/"
                    class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <span class="fs-4 text-white">Pricing example</span> </a>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 link-secondary text-white text-decoration-none" href="/">Главная</a>
                    <a class="me-3 py-2 link-secondary text-white text-decoration-none" href="/about">О нас</a>
                </nav>
            </div>
        </header>
    </div>
    <div class="container">
        @yield('main_content')
    </div>


</body>
