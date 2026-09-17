<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/costom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    @yield('title')
    @yield('style')

    <style>
        .nav-links a.active {
            color: #4f46e5 !important;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('img/logo.png.png') }}" alt="LOGO" style="width:15%;">
                </a>
                
                <div class="nav-links">
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ url('service') }}" class="{{ request()->is('service') ? 'active' : '' }}">Service</a>
                    <a href="{{ url('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
                    <a href="{{ url('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('dashboard') }}" class="dashboard-btn">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                        @endauth
                    @endif
                </div>
            </nav>
        </div>
    </header>

    <!-- Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>About UNLIMITED-MEDIA-SALINH</h3>
                    <p>A creative space dedicated to digital media design, video editing, and modern web development solutions.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/mutsa.linh/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="tel:+855095505158"><i class="fa-solid fa-phone"></i></a>
                        <a href="https://t.me/mutsalinh"><i class="fa-brands fa-telegram"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('service') }}">Service</a></li>
                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Categories</h3>
                    <ul class="footer-links">
                        <li><a href="{{ url('service') }}">Video Edit</a></li>
                        <li><a href="{{ url('service') }}">3D-Motion Graphic</a></li>
                        <li><a href="{{ url('service') }}">Photography</a></li>
                        <li><a href="{{ url('service') }}">2D-Cartoon Animator</a></li>
                        <li><a href="{{ url('service') }}">Graphic Design</a></li>
                        <li><a href="{{ url('service') }}">Content Writing</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2026 PTMS. All rights reserved. Built with Laravel.</p>
            </div>
        </div>
    </footer>
</body>
</html>