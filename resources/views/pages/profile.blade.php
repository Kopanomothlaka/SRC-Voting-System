@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <!-- Profile Header -->
    <section class="profile-header">
        <div class="container">
            <h1 class="profile-title">Student Profile</h1>
            <p class="profile-subtitle">View and manage your student information and voting status for the UNISA SRC Election 2025.</p>
        </div>
    </section>

    <!-- Profile Main Content -->
    <section class="profile-section">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="profile-grid">
                <!-- Profile Sidebar -->
                <div class="profile-sidebar">
                    <div class="profile-image">
                        <i class="fas fa-user"></i>
                    </div>
                    <h2 class="profile-name">{{ Auth::user()->name }}</h2>
                    <p class="profile-student-id">Student ID: {{ Auth::user()->student_number }}</p>

                    <div class="profile-status">
                        <span class="status-badge status-active">Active Student</span>
                    </div>

                    <div class="profile-sidebar-menu">
                        <div class="sidebar-menu-item active">
                            <i class="fas fa-user"></i>
                            <span>My Profile</span>
                        </div>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div class="sidebar-menu-item">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Log Out</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Profile Content -->
                <div class="profile-content">
                    <!-- Voting Status Alert -->
                    <div class="voting-status-card">
                        <div class="voting-status-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="voting-status-info">
                            <h3 class="voting-status-title">SRC Election 2025 is Now Open!</h3>
                            <p class="voting-status-text">The voting period is currently active. Make your voice heard by casting your vote before June 3, 2025, at 11:59 PM. Your participation matters!</p>
                        </div>
                        <div class="voting-status-actions">
                            <a href="vote.html" class="vote-now-btn">
                                <i class="fas fa-vote-yea"></i> Vote Now
                            </a>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="profile-card">
                        <div class="profile-card-header">
                            <h3 class="profile-card-title">
                                <i class="fas fa-user-circle"></i> Personal Information
                            </h3>
                            <div class="profile-card-actions">
                                <button class="profile-card-action" id="editProfileBtn">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                            </div>


                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-2 text-danger" style="color: red">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="profile-card-content">
                            <form id="profileForm" method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="info-grid">
                                    <div class="info-item">
                                        <span class="info-label">Full Name</span>
                                        <span class="info-value view-mode">{{ Auth::user()->name }}</span>
                                        <input type="text" name="name" value="{{ Auth::user()->name }}" class="info-value edit-mode form-control" style="display: none;">
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Student Number</span>
                                        <span class="info-value">{{ Auth::user()->student_number }}</span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Email Address</span>
                                        <span class="info-value">{{ Auth::user()->email }}</span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Phone Number</span>
                                        <span class="info-value view-mode">{{ Auth::user()->phone }}</span>
                                        <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="info-value edit-mode form-control" style="display: none;">
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Faculty</span>
                                        <span class="info-value view-mode">{{ Auth::user()->faculty }}</span>
                                        <input type="text" name="faculty" value="{{ Auth::user()->faculty }}" class="info-value edit-mode form-control" style="display: none;">
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Study Year</span>
                                        <span class="info-value view-mode">{{ Auth::user()->study_year }}</span>
                                        <input type="text" name="study_year" value="{{ Auth::user()->study_year }}" class="info-value edit-mode form-control" style="display: none;">
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Campus</span>
                                        <span class="info-value view-mode">{{ Auth::user()->campus }}</span>
                                        <input type="text" name="campus" value="{{ Auth::user()->campus }}" class="info-value edit-mode form-control" style="display: none;">
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Student Status</span>
                                        <span class="info-value">Active</span>
                                    </div>
                                </div>
                                <div class="form-actions edit-mode" style="display: none; margin-top: 20px;">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                    <button type="button" id="cancelEditBtn" class="btn btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Current Election Status -->
                    <div class="profile-card">
                        <div class="profile-card-header">
                            <h3 class="profile-card-title">
                                <i class="fas fa-chart-bar"></i> Current Election Status
                            </h3>
                        </div>
                        <div class="profile-card-content">
                            <div class="election-status">
                                <div class="info-item">
                                    <span class="info-label">Current Election</span>
                                    <span class="info-value">UNISA SRC Election 2025</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Voting Period</span>
                                    <span class="info-value">June 1 - June 3, 2025</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Your Voting Status</span>
                                    <span class="info-value status-badge status-pending">Not Voted Yet</span>
                                </div>

                                <div class="status-progress">
                                    <div class="progress-label">
                                        <span>Election Progress</span>
                                        <span>33% Complete</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 33%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Voting History -->
                    <div class="profile-card">
                        <div class="profile-card-header">
                            <h3 class="profile-card-title">
                                <i class="fas fa-history"></i> Voting History
                            </h3>
                        </div>
                        <div class="profile-card-content">
                            <div class="history-item">
                                <div class="history-election">
                                    <span class="history-title">Faculty Representatives Election</span>
                                    <span class="history-date">March 15, 2025</span>
                                </div>
                                <span class="history-result result-verified">Vote Verified</span>
                            </div>
                            <div class="history-item">
                                <div class="history-election">
                                    <span class="history-title">Student Council Election</span>
                                    <span class="history-date">November 10, 2024</span>
                                </div>
                                <span class="history-result result-verified">Vote Verified</span>
                            </div>
                            <div class="history-item">
                                <div class="history-election">
                                    <span class="history-title">Department Representatives</span>
                                    <span class="history-date">August 5, 2024</span>
                                </div>
                                <span class="history-result result-verified">Vote Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        :root {
            --primary: #b146c2;
            --primary-light: #c76bd3;
            --primary-dark: #8e3799;
            --secondary: #333333;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --white: #ffffff;
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
            --info: #17a2b8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light);
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        header.scrolled {
            padding: 10px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Profile Header */
        .profile-header {
            background: linear-gradient(135deg, var(--primary-light), var(--primary-dark));
            color: var(--white);
            padding: 120px 0 30px;
            text-align: center;
        }

        .profile-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .profile-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Profile Main Content */
        .profile-section {
            padding: 60px 0;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
        }

        /* Profile Sidebar */
        .profile-sidebar {
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            height: fit-content;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 30px auto 20px;
            background-color: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            color: var(--primary);
            border: 5px solid rgba(177, 70, 194, 0.1);
            overflow: hidden;
        }

        .profile-name {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .profile-student-id {
            text-align: center;
            color: var(--gray);
            margin-bottom: 20px;
        }

        .profile-status {
            padding: 15px;
            text-align: center;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        .status-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .status-active {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }

        .status-voted {
            background-color: rgba(177, 70, 194, 0.1);
            color: var(--primary);
        }

        .status-pending {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning);
        }

        .profile-sidebar-menu {
            margin-top: 20px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        .sidebar-menu-item {
            padding: 15px 20px;
            transition: all 0.3s ease;
            cursor: pointer;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .sidebar-menu-item:hover {
            background-color: rgba(177, 70, 194, 0.05);
        }

        .sidebar-menu-item.active {
            background-color: rgba(177, 70, 194, 0.1);
            border-left: 4px solid var(--primary);
        }

        .sidebar-menu-item i {
            color: var(--primary);
            width: 20px;
            text-align: center;
        }

        .sidebar-menu-item span {
            color: var(--secondary);
            font-weight: 500;
        }

        /* Profile Content */
        .profile-content {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .profile-card {
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .profile-card-header {
            padding: 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-card-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--secondary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-card-title i {
            color: var(--primary);
        }

        .profile-card-actions {
            display: flex;
            gap: 10px;
        }

        .profile-card-action {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: rgba(177, 70, 194, 0.1);
            color: var(--primary);
            border: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .profile-card-action:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        .profile-card-content {
            padding: 20px;
        }

        /* Personal Info */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .info-label {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .info-value {
            color: var(--secondary);
            font-weight: 600;
        }

        /* Form Controls */
        .form-control {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        /* Edit Mode Styles */
        .edit-mode {
            display: none;
        }

        .form-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-secondary {
            background-color: var(--gray);
            color: var(--white);
        }

        .btn-secondary:hover {
            background-color: var(--dark);
        }

        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success);
            border-left: 4px solid var(--success);
        }

        /* Voting Status Card */
        .voting-status-card {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: rgba(177, 70, 194, 0.05);
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .voting-status-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(177, 70, 194, 0.1);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .voting-status-info {
            flex-grow: 1;
        }

        .voting-status-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 5px;
        }

        .voting-status-text {
            color: var(--gray);
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .voting-status-actions {
            margin-left: auto;
        }

        .vote-now-btn {
            padding: 8px 20px;
            background-color: var(--primary);
            color: var(--white);
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .vote-now-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(177, 70, 194, 0.3);
        }

        /* Election Status */
        .election-status {
            margin-top: 15px;
        }

        .status-progress {
            margin-top: 15px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .progress-label {
            display: flex;
            justify-content: space-between;
            color: var(--secondary);
            font-size: 0.9rem;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary-light), var(--primary));
            border-radius: 10px;
            transition: width 1s ease;
        }

        /* Voting History */
        .history-item {
            padding: 15px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .history-item:last-child {
            border-bottom: none;
        }

        .history-election {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .history-title {
            font-weight: 600;
            color: var(--secondary);
        }

        .history-date {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .history-result {
            font-weight: 600;
        }

        .result-verified {
            color: var(--success);
        }

        .result-pending {
            color: var(--warning);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .profile-grid {
                grid-template-columns: 1fr;
            }

            .profile-sidebar {
                max-width: 400px;
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                padding: 15px;
            }

            .profile-title {
                font-size: 2rem;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .voting-status-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .voting-status-icon {
                margin-bottom: 15px;
            }

            .voting-status-actions {
                margin-left: 0;
                margin-top: 15px;
                align-self: flex-start;
            }
        }

        @media (max-width: 576px) {
            .profile-title {
                font-size: 1.8rem;
            }
        }
    </style>

    <!-- JavaScript -->
    <script>
        // Profile Edit Toggle
        const editProfileBtn = document.getElementById('editProfileBtn');
        const cancelEditBtn = document.getElementById('cancelEditBtn');
        const viewModeElements = document.querySelectorAll('.view-mode');
        const editModeElements = document.querySelectorAll('.edit-mode');
        const formActions = document.querySelector('.form-actions');

        editProfileBtn.addEventListener('click', () => {
            viewModeElements.forEach(el => el.style.display = 'none');
            editModeElements.forEach(el => el.style.display = 'block');
            formActions.style.display = 'flex';
            editProfileBtn.style.display = 'none';
        });

        cancelEditBtn.addEventListener('click', () => {
            viewModeElements.forEach(el => el.style.display = 'block');
            editModeElements.forEach(el => el.style.display = 'none');
            formActions.style.display = 'none';
            editProfileBtn.style.display = 'block';
        });

        // Initialize animations
        const animatedElements = document.querySelectorAll('.animate');
        const checkIfInView = () => {
            const windowHeight = window.innerHeight;
            const windowTopPosition = window.scrollY;

            animatedElements.forEach(element => {
                const elementTopPosition = element.offsetTop;

                if (elementTopPosition < windowTopPosition + windowHeight) {
                    element.classList.add('fadeInUp');
                }
            });
        };

        window.addEventListener('scroll', checkIfInView);
        window.addEventListener('load', checkIfInView);
    </script>
@endsection
