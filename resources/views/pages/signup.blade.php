@extends('layouts.app')

@section('title', 'Student Registration')

@section('content')
    <main class="main-content">
        <div class="login-form-container">
            <form class="login-form" method="POST" action="{{ route('register') }}">
                @csrf

                <h2 class="form-title">New Student Registration</h2>

                <div class="form-group">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-input" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Student Number</label>
                    <input type="text" class="form-input" name="student_number" value="{{ old('student_number') }}" required>
                    @error('student_number')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-input" name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-input" name="password" required>
                    @error('password')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-input" name="password_confirmation" required>
                </div>

                <button type="submit" class="form-button">Create Account</button>

                <div class="form-footer">
                    <p>Already have an account? <a href="{{ route('register') }}">Login Here</a></p>
                </div>
            </form>
        </div>
    </main>
@endsection
