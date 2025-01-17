<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tailwind CSS & Alpine.js Template</title>

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="./css/tailwind.css"> --}}
        @vite('resources/css/app.css')
        <style>[x-cloak] { display: none !important; }</style>

        <!-- Scripts -->
        <script defer src="https://unpkg.com/@alpinejs/collapse@3.4.2/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    </head>
    <body>
        {{$slot}}
    </body>
</html>
