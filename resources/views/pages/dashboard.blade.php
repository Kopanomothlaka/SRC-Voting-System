@extends('layouts.app')

@section('content')

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
