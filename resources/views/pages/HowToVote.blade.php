@extends('layouts.app')

@section('title', 'How to Vote')

@section('content')

    <section class="hero" id="home">
        <div class="container hero-container">
            <div class="hero-content">
                @auth
                    <h1 class="hero-title">Welcome Back, {{ Auth::user()->name }}!</h1>
                    <p class="hero-text">
                        Thank you for logging in. Your voice shapes the future of the University of South Africa.
                        Head over to your dashboard to participate in the 2025 SRC Election and make your vote count!
                    </p>
                    <a href="{{ route('dashboard') }}" class="cta-btn">
                        Go Cast Vote <i class="fas fa-arrow-right"></i>
                    </a>
                @else
                    <h1 class="hero-title">Welcome Back To Voting Station</h1>
                    <p class="hero-text">
                        Your voice matters! The University of South Africa SRC Election 2025 is your opportunity to shape
                        the future of student leadership. Cast your vote and help elect representatives who will advocate
                        for your needs, enhance student life, and drive positive change on campus.
                    </p>
                    <a href="{{ route('login') }}" class="cta-btn">
                        Cast Your Vote <i class="fas fa-arrow-right"></i>
                    </a>
                @endauth
            </div>
            <div class="hero-image">
                <img src="{{ asset('img/Voting-amico(1).png') }}" alt="Voting Illustration">
                <div class="vote-card vote-card-1">
                    <div class="stars">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                    <p class="vote-text">VOTE HERE</p>
                </div>
                <div class="vote-card vote-card-2">
                    <div class="stars">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                    <p class="vote-text">VOTE HERE</p>
                </div>
            </div>
        </div>
    </section>

    <section class="steps" id="how-to-vote">
        <div class="container steps-container">
            <h2 class="section-title">How To Vote</h2>
            <div class="steps-timeline">
                <div class="step animate">
                    <div class="step-number">1 <i class="fas fa-user-circle"></i></div>
                    <h3 class="step-title">Log In</h3>
                    <p class="step-text">Sign in with your UNISA student credentials to access the voting portal.</p>
                </div>
                <div class="step animate">
                    <div class="step-number">2 <i class="fas fa-list-alt"></i></div>
                    <h3 class="step-title">Review Candidates</h3>
                    <p class="step-text">Explore candidate profiles and their proposed initiatives.</p>
                </div>
                <div class="step animate">
                    <div class="step-number">3 <i class="fas fa-vote-yea"></i></div>
                    <h3 class="step-title">Cast Your Vote</h3>
                    <p class="step-text">Select your preferred candidates for each position.</p>
                </div>
                <div class="step animate">
                    <div class="step-number">4 <i class="fas fa-check-circle"></i></div>
                    <h3 class="step-title">Confirm</h3>
                    <p class="step-text">Review and confirm your selections to complete the voting process.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
