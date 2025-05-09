<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UNISA SRC Election 2025')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- Header -->
<header>
    <div class="container header-container">
        <div class="logo">
            <img src="{{ asset('img/logo.jpg') }}"  alt="UNISA Logo">
        </div>
        <nav>
            <div class="nav-links" id="navLinks">



                @guest
                    <a href="#home"><i class="fas fa-home"></i> Home</a>

                    <a href="{{route('HowToVote')}}"><i class="fas fa-question-circle"></i> How to Vote</a>
                    <a href="{{route('candidates')}}"><i class="fas fa-users"></i> Candidates</a>
                    <a href="{{ route('login') }}" class="login-btn">
                        <i class="fas fa-sign-in-alt"></i> <span>Login</span>
                    </a>
                @endguest

                @auth()
                        <a href="{{route('dashboard')}}"><i class="fas fa-home"></i> Home</a>

                        <a href="{{route('HowToVote')}}"><i class="fas fa-question-circle"></i> How to Vote</a>
                        <a href="{{route('candidates')}}"><i class="fas fa-users"></i> Candidates</a>
                    <a href="{{route('vote')}}"><i class="fas fa-vote-yea"></i> Vote</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div class="sidebar-menu-item">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Log Out</span>
                            </div>
                        </a>




                    <a href="{{route('profile')}}" class="login-btn">
                        <i class="fa-solid fa-user"></i><span>Profile</span>
                    </a>





                @endauth

            </div>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </div>
</header>

@yield('content')

<!-- Footer -->
<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-container">
            <div class="footer-col">
                <div class="footer-logo">
                    <img src="/api/placeholder/120/40" alt="UNISA Logo">
                </div>
                <p class="footer-text">The University of South Africa Student Representative Council Elections 2025.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#home"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="#vote"><i class="fas fa-chevron-right"></i> Vote</a></li>
                    <li><a href="#how-to-vote"><i class="fas fa-chevron-right"></i> How to Vote</a></li>
                    <li><a href="#candidates"><i class="fas fa-chevron-right"></i> Candidates</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3 class="footer-title">Support</h3>
                <ul class="footer-links">
                    <li><a href="#"><i class="fas fa-envelope"></i> election@unisa.ac.za</a></li>
                    <li><a href="#"><i class="fas fa-phone"></i> +27 12 345 6789</a></li>
                    <li><a href="#"><i class="fas fa-question-circle"></i> FAQs</a></li>
                    <li><a href="#"><i class="fas fa-headset"></i> Technical Support</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 University of South Africa. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
