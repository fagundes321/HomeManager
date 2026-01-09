<!DOCTYPE html>
<html lang="en">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.scss">
    <title>{{ $title }}</title>
</head>

<body>
    <div class="container">
        {{-- <h1>{{ $title }}</h1> --}}
        @if ($errors->any())

            <div class="alert alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif
        <div class="text-center mb-4">
            <a href="{{ route('index') }}" class="text-decoration-none">
                <h1 class="fw-bold text-dark mb-1">HomeManager</h1>
                <p class="text-muted mb-0">
                    Gerencie sua casa de forma simples e organizada
                </p>
            </a>
        </div>

        {{ $slot }}
    </div>
</body>

</html>
