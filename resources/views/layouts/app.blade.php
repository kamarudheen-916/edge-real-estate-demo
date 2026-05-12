<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="smooth-scroll">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dubai Luxury Real Estate | Premium Properties</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS & Vite -->
    @vite(['resources/css/app.css'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <!-- Preloader Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.getElementById('preloader').classList.add('fade-out');
            }, 1500); // Cinematic delay
        });

        // Reveal animations on scroll
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 100;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        window.addEventListener("load", reveal);
    </script>
</head>
<body class="bg-brand-dark text-brand-text font-sans antialiased overflow-x-hidden selection:bg-brand-gold selection:text-brand-dark">

    <!-- Preloader -->
    <div id="preloader" class="loader-wrapper">
        <img src="https://mail.edgerealty.ae/public/assets/asset/logo.png" alt="Edge Realty" class="h-16 w-auto animate-pulse">
    </div>

    @yield('content')

</body>
</html>
