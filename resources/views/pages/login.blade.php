@extends('layouts.app')

@section('title', 'Student Login')

@section('content')
    <main class="main-content">
        <div class="login-form-container">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <h2 class="form-title">UNISA Student Login</h2>

                <div class="form-group">
                    <label for="student_number" class="form-label">Student Number</label>
                    <input type="text"
                           id="student_number"
                           class="form-input @error('student_number') error @enderror"
                           name="student_number"
                           value="{{ old('student_number') }}"
                           required
                           autofocus
                           placeholder="Enter your student number">
                    @error('student_number')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                           id="password"
                           class="form-input @error('password') error @enderror"
                           name="password"
                           required
                           placeholder="Enter your password">
                    @error('password')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group remember-me">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remember Me
                    </label>
                </div>

                <button type="submit" class="form-button">
                    Login to Vote
                </button>

                <div class="form-footer">
                    @if (Route::has('password.request'))
                        <p class="form-help">
                            Forgot your password?
                            <a href="{{ route('password.request') }}">Reset Password</a>
                        </p>
                    @endif
                    <p>Don't have an account? <a href="{{ route('register') }}">Register Here</a></p>
                </div>
            </form>
        </div>
    </main>
@endsection
