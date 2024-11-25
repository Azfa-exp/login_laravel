<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Laravel</title>

    <!-- Vite CSS and JS -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #E4E9F7, #F6F7FF);
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f8fc;
        }

        .card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            padding: 2rem 3rem;
            max-width: 600px;
            width: 100%;
            text-align: center;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #343a40;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.125rem;
            color: #4A5568;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 24px;
            font-size: 1rem;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            transition: background-color 0.3s, transform 0.2s;
            text-align: center;
            border: none;
        }

        .btn-primary {
            background-color: #343a40;
            color: white;
        }

        .btn-primary:hover {
            background-color: #495057;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: #28a745;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .mt-8 {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Selamat Datang di Platform Kami</h1>
            <p>Mari ciptakan aplikasi luar biasa bersama. Login atau Register untuk memulai!</p>

            <div class="mt-8">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary">Go to Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</body>
</html>
