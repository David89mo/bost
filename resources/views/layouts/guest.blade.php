<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Estilos inline -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background: linear-gradient(135deg, #6366f1, #a855f7);
                color: #ffffff;
                margin: 0;
                padding: 0;
            }
            .container {
                min-height: 50vh; /* Reducido de 100vh a 50vh */
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 2rem;
            }
            .content {
                background-color: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                border-radius: 1rem;
                padding: 2rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
                max-width: 800px; /* Aumentado de 400px a 800px */
                width: 100%;
            }
            h1 {
                font-size: 2rem;
                font-weight: 600;
                margin-bottom: 1rem;
                text-align: center;
                color: #f3f4f6;
            }
            input, button {
                width: 100%;
                padding: 0.75rem;
                margin-bottom: 1rem;
                border-radius: 0.5rem;
                border: none;
                font-size: 1rem;
            }
            input {
                background-color: rgba(255, 255, 255, 0.2);
                color: #ffffff;
            }
            button {
                background-color: #10b981;
                color: #ffffff;
                font-weight: 600;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            button:hover {
                background-color: #059669;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Bienvenido</h1>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>