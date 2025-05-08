@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Welcome Back To Voting Station</h1>
                <p class="hero-text">Your voice matters! The University of South Africa SRC Election 2025 is your opportunity to shape the future of student leadership. Cast your vote and help elect representatives who will advocate for your needs, enhance student life, and drive positive change on campus.</p>
                <a href="{{route('login')}}" class="cta-btn">
                    Cast Your Vote <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="hero-image">
                <img src="{{asset('img/Voting-amico(1).png')}}" alt="Voting Illustration">
                <div class="vote-card vote-card-1">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="vote-text">VOTE HERE</p>
                </div>
                <div class="vote-card vote-card-2">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="vote-text">VOTE HERE</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Why Your Vote Matters</h2>
            <div class="features-grid">
                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="feature-title">Amplify Your Voice</h3>
                    <p class="feature-text">Your vote ensures your concerns and ideas are represented in the student leadership.</p>
                </div>
                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-title">Shape Campus Culture</h3>
                    <p class="feature-text">Elect leaders who align with your vision for a better campus experience.</p>
                </div>
                <div class="feature-card animate">
                    <div class="feature-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="feature-title">Drive Positive Change</h3>
                    <p class="feature-text">Support candidates committed to creating meaningful improvements at UNISA.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="steps" id="how-to-vote">
        <div class="container steps-container">
            <h2 class="section-title">How To Vote</h2>
            <div class="steps-timeline">
                <div class="step animate">
                    <div class="step-number">1<i class="fas fa-user-circle"></i></div>
                    <h3 class="step-title">Log In</h3>
                    <p class="step-text">Sign in with your UNISA student credentials to access the voting portal.</p>
                </div>
                <div class="step animate">
                    <div class="step-number">2<i class="fas fa-list-alt"></i></div>
                    <h3 class="step-title">Review Candidates</h3>
                    <p class="step-text">Explore candidate profiles and their proposed initiatives.</p>
                </div>
                <div class="step animate">
                    <div class="step-number">3<i class="fas fa-vote-yea"></i></div>
                    <h3 class="step-title">Cast Your Vote</h3>
                    <p class="step-text">Select your preferred candidates for each position.</p>
                </div>
                <div class="step animate">
                    <div class="step-number">4<i class="fas fa-check-circle"></i></div>
                    <h3 class="step-title">Confirm</h3>
                    <p class="step-text">Review and confirm your selections to complete the voting process.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
