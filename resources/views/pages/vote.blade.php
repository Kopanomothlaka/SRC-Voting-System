@extends('layouts.app')

@section('title', 'Vote')

@section('content')
    <!-- Main Voting Content -->
    <section class="vote-section">
        <div class="container">
            <!-- Vote Header -->
            <div class="vote-header">
                <h1 class="vote-title">UNISA SRC Election 2025</h1>
                <p class="vote-subtitle">Your vote helps shape the future of student leadership at UNISA. Take your time to review each candidate before making your selection.</p>

                <!-- Voting Categories -->
                <div class="vote-categories">
                    <div class="category-tab active" data-category="executive">Executive Positions</div>
                    <div class="category-tab" data-category="faculty">Faculty Representatives</div>
                    <div class="category-tab" data-category="school">School Representatives</div>
                </div>

                <div class="categories-progress">
                    <div class="category-pill completed">Executive</div>
                    <i class="fas fa-chevron-right"></i>
                    <div class="category-pill active">Faculty</div>
                    <i class="fas fa-chevron-right"></i>
                    <div class="category-pill">School</div>
                </div>
            </div>

            <!-- Executive Positions Section -->
            <div class="voting-section active" id="executive-section">
                <!-- Progress Bar -->
                <div class="vote-progress">
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>
                    <div class="progress-steps">
                        <div class="progress-step completed">
                            <div class="step-indicator">1</div>
                            <span class="step-label">President</span>
                        </div>
                        <div class="progress-step active">
                            <div class="step-indicator">2</div>
                            <span class="step-label">Vice President</span>
                        </div>
                        <div class="progress-step">
                            <div class="step-indicator">3</div>
                            <span class="step-label">Secretary</span>
                        </div>
                    </div>
                </div>

                <!-- Executive Voting Form -->
                <div class="voting-form">
                    <div class="voting-header">
                        <h2 class="position-title">Vice President</h2>
                        <p class="position-description">Select one candidate for the position of Vice President of the Student Representative Council.</p>
                    </div>

                    <div class="voting-body">
                        <div class="warning-banner">
                            <div class="warning-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="warning-text">
                                <strong>Important:</strong> You can only vote once for each position. Your selection cannot be changed after submission, so please choose carefully.
                            </div>
                        </div>

                        <div class="candidate-cards">
                            <!-- Candidate 1 -->
                            <div class="candidate-card">
                                <div class="candidate-image">
                                    <img src="/api/placeholder/300/160" alt="Thabo Mokoena">
                                </div>
                                <div class="candidate-info">
                                    <h3 class="candidate-name">Thabo Mokoena</h3>
                                    <p class="candidate-faculty">Faculty of Humanities</p>
                                    <p class="candidate-bio">Third-year student passionate about improving campus facilities and student welfare.</p>
                                    <div class="view-manifesto">
                                        View Manifesto <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Candidate 2 -->
                            <div class="candidate-card selected">
                                <div class="candidate-image">
                                    <img src="/api/placeholder/300/160" alt="Sarah Naidoo">
                                </div>
                                <div class="candidate-info">
                                    <h3 class="candidate-name">Sarah Naidoo</h3>
                                    <p class="candidate-faculty">Faculty of Law</p>
                                    <p class="candidate-bio">Law student advocating for transparent governance and inclusive policies.</p>
                                    <div class="view-manifesto">
                                        View Manifesto <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Candidate 3 -->
                            <div class="candidate-card">
                                <div class="candidate-image">
                                    <img src="/api/placeholder/300/160" alt="Lesedi Molefe">
                                </div>
                                <div class="candidate-info">
                                    <h3 class="candidate-name">Lesedi Molefe</h3>
                                    <p class="candidate-faculty">Faculty of Science</p>
                                    <p class="candidate-bio">Science major focused on integration of technology and improving student resources.</p>
                                    <div class="view-manifesto">
                                        View Manifesto <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="voting-actions">
                            <button class="btn btn-outline">
                                <i class="fas fa-arrow-left"></i> Previous
                            </button>
                            <button class="btn btn-primary" id="next-btn-executive">
                                Next <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Faculty Representatives Section -->
            <div class="voting-section" id="faculty-section">
                <!-- Progress Bar -->
                <div class="vote-progress">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <div class="progress-steps">
                        <div class="progress-step completed">
                            <div class="step-indicator">1</div>
                            <span class="step-label">Humanities</span>
                        </div>
                        <div class="progress-step active">
                            <div class="step-indicator">2</div>
                            <span class="step-label">Science</span>
                        </div>
                        <div class="progress-step">
                            <div class="step-indicator">3</div>
                            <span class="step-label">Law</span>
                        </div>
                        <div class="progress-step">
                            <div class="step-indicator">4</div>
                            <span class="step-label">Business</span>
                        </div>
                    </div>
                </div>

                <!-- Faculty Voting Form -->
                <div class="voting-form">
                    <div class="voting-header">
                        <h2 class="position-title">Faculty of Science Representative</h2>
                        <p class="position-description">Select one candidate to represent the Faculty of Science in the Student Representative Council.</p>
                    </div>

                    <div class="voting-body">
                        <div class="warning-banner">
                            <div class="warning-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="warning-text">
                                <strong>Important:</strong> You can only vote once for each position. Your selection cannot be changed after submission, so please choose carefully.
                            </div>
                        </div>

                        <div class="candidate-cards">
                            <!-- Candidate 1 -->
                            <div class="candidate-card">
                                <div class="candidate-image">
                                    <img src="/api/placeholder/300/160" alt="Peter Mashaba">
                                </div>
                                <div class="candidate-info">
                                    <h3 class="candidate-name">Peter Mashaba</h3>
                                    <p class="candidate-faculty">Computer Science</p>
                                    <p class="candidate-bio">Advocates for better technology resources and programming workshops.</p>
                                    <div class="view-manifesto">
                                        View Manifesto <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Candidate 2 -->
                            <div class="candidate-card selected">
                                <div class="candidate-image">
                                    <img src="/api/placeholder/300/160" alt="Nomsa Khumalo">
                                </div>
                                <div class="candidate-info">
                                    <h3 class="candidate-name">Nomsa Khumalo</h3>
                                    <p class="candidate-faculty">Mathematics</p>
                                    <p class="candidate-bio">Focused on improving STEM education and research opportunities for students.</p>
                                    <div class="view-manifesto">
                                        View Manifesto <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Candidate 3 -->
                            <div class="candidate-card">
                                <div class="candidate-image">
                                    <img src="/api/placeholder/300/160" alt="David van Niekerk">
                                </div>
                                <div class="candidate-info">
                                    <h3 class="candidate-name">David van Niekerk</h3>
                                    <p class="candidate-faculty">Physics</p>
                                    <p class="candidate-bio">Championing better laboratory facilities and research funding for science students.</p>
                                    <div class="view-manifesto">
                                        View Manifesto <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="voting-actions">
                            <button class="btn btn-outline">
                                <i class="fas fa-arrow-left"></i> Previous
                            </button>
                            <button class="btn btn-primary" id="next-btn-faculty">
                                Next <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- School Representatives Section -->
            <div class="voting-section" id="school-section">
                <!-- Progress Bar -->
                <div class="vote-progress">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 75%;"></div>
                    </div>
                    <div class="progress-steps">
                        <div class="progress-step completed">
                            <div class="step-indicator">1</div>
                            <span class="step-label">Humanities</span>
                        </div>
                        <div class="progress-step completed">
                            <div class="step-indicator">2</div>
                            <span class="step-label">Science</span>
                        </div>
                        <div class="progress-step active">
                            <div class="step-indicator">3</div>
                            <span class="step-label">Law</span>
                        </div>
                    </div>
                </div>

                <!-- School Voting Form -->
                <div class="voting-form">
                    <div class="voting-header">
                        <h2 class="position-title">School of Law Representative</h2>
                        <p class="position-description">Select one candidate to represent the School of Law in the Student Representative Council.</p>
                    </div>

                    <div class="voting-body">
                        <div class="warning-banner">
                            <div class="warning-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="warning-text">
                                <strong>Important:</strong> You can only vote once for each position. Your selection cannot be changed after submission, so please choose carefully.
                            </div>
                        </div>

                        <div class="candidate-cards">
                            <!-- Candidate 1 -->
                            <div class="candidate-card">
                                <div class="candidate-image">
                                    <img src="/api/placeholder/300/160" alt="Amahle Dlamini">
                                </div>
                                <div class="candidate-info">
                                    <h3 class="candidate-name">Amahle Dlamini</h3>
                                    <p class="candidate-faculty">LLB 3rd Year</p>
                                    <p class="candidate-bio">Advocating for better legal research resources and mooting opportunities.</p>
                                    <div class="view-manifesto">
                                        View Manifesto <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Candidate 2 -->
                            <div class="candidate-card selected">
                                <div class="candidate-image">
                                    <img src="/api/placeholder/300/160" alt="James Wilson">
                                </div>
                                <div class="candidate-info">
                                    <h3 class="candidate-name">James Wilson</h3>
                                    <p class="candidate-faculty">LLB 4th Year</p>
                                    <p class="candidate-bio">Focused on improving career services and internship opportunities for law students.</p>
                                    <div class="view-manifesto">
                                        View Manifesto <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="voting-actions">
                            <button class="btn btn-outline">
                                <i class="fas fa-arrow-left"></i> Previous
                            </button>
                            <button class="btn btn-primary" id="submit-vote-btn">
                                Submit Vote <i class="fas fa-check"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- OTP Verification Section -->
            <div class="voting-form" id="otp-section" style="display: none;">
                <div class="voting-header">
                    <h2 class="position-title">Verify Your Identity</h2>
                    <p class="position-description">For security purposes, please enter the 6-digit OTP sent to your registered email and phone number.</p>
                </div>

                <div class="voting-body">
                    <div class="warning-banner">
                        <div class="warning-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="warning-text">
                            <strong>Note:</strong> The OTP is valid for 5 minutes. If you didn't receive it, you can request a new one.
                        </div>
                    </div>

                    <div class="otp-form">
                        <div class="otp-inputs">
                            <input type="text" maxlength="1" class="otp-input" data-index="1" autofocus>
                            <input type="text" maxlength="1" class="otp-input" data-index="2">
                            <input type="text" maxlength="1" class="otp-input" data-index="3">
                            <input type="text" maxlength="1" class="otp-input" data-index="4">
                            <input type="text" maxlength="1" class="otp-input" data-index="5">
                            <input type="text" maxlength="1" class="otp-input" data-index="6">
                        </div>

                        <div class="otp-timer">
                            <i class="fas fa-clock"></i> Time remaining: <span id="otp-timer">05:00</span>
                        </div>

                        <div class="otp-actions">
                            <button class="btn btn-outline" id="resend-otp">
                                <i class="fas fa-sync-alt"></i> Resend OTP
                            </button>
                            <button class="btn btn-primary" id="verify-otp">
                                <i class="fas fa-check"></i> Verify & Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Message (Hidden by default) -->
            <div class="voting-form success-message" id="success-message">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h2 class="success-title">Your Vote Has Been Submitted!</h2>
                <p class="success-text">Thank you for participating in the UNISA SRC Elections 2025. Your vote has been successfully recorded. Below is your voting receipt for reference.</p>

                <div class="receipt-box">
                    <div class="receipt-item">
                        <span class="receipt-label">Voter ID:</span>
                        <span class="receipt-value">UNISA2025-789456</span>
                    </div>
                    <div class="receipt-item">
                        <span class="receipt-label">Date & Time:</span>
                        <span class="receipt-value">15 May 2025, 14:30</span>
                    </div>
                    <div class="receipt-item">
                        <span class="receipt-label">Positions Voted:</span>
                        <span class="receipt-value">3</span>
                    </div>
                    <div class="receipt-item">
                        <span class="receipt-label">Confirmation Code:</span>
                        <span class="receipt-value">SRC-789-XYZ-123</span>
                    </div>
                </div>

                <a href="#" class="download-receipt">
                    <i class="fas fa-download"></i> Download Receipt
                </a>
                <br>
                <a href="index.html" class="continue-btn">
                    <i class="fas fa-home"></i> Return to Home
                </a>
            </div>
        </div>
    </section>

    <!-- Confirmation Modal -->
    <div class="modal-overlay" id="confirmation-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Confirm Your Vote</h3>
                <button class="close-modal" id="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="confirmation-message">
                    <div class="confirmation-icon">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                    <p class="confirmation-text">Please confirm your selection before submitting your vote. Once submitted, your vote cannot be changed.</p>
                </div>

                <div class="confirmation-choice">
                    <div class="choice-label">Your Selection:</div>
                    <div class="choice-value">Nomsa Khumalo - Faculty of Science Representative</div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-outline" id="cancel-vote">
                        <i class="fas fa-times"></i> Cancel
                    </button>
                    <button class="btn btn-primary" id="confirm-vote">
                        <i class="fas fa-check"></i> Confirm Vote
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Existing styles remain the same, add these new styles for OTP section */

        /* OTP Verification Styles */
        .otp-form {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        .otp-inputs {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 30px 0;
        }

        .otp-input {
            width: 50px;
            height: 60px;
            font-size: 24px;
            text-align: center;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .otp-input:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 61, 94, 0.2);
        }

        .otp-timer {
            font-size: 1.1rem;
            color: var(--gray);
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .otp-timer i {
            color: var(--warning);
        }

        .otp-actions {
            display: flex;
            justify-content: center;
            gap: 15px;
        }



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

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }


        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--secondary);
            cursor: pointer;
        }

        /* Vote Main Content */
        .vote-section {
            padding: 120px 0 80px;
            flex: 1;
        }

        .vote-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .vote-title {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 15px;
            font-weight: 800;
        }

        .vote-subtitle {
            font-size: 1.1rem;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .vote-categories {
            max-width: 700px;
            margin: 0 auto 50px;
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .category-tab {
            padding: 8px 16px;
            background-color: var(--white);
            border: 2px solid transparent;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            color: var(--gray);
            transition: all 0.3s ease;
        }

        .category-tab:hover {
            background-color: rgba(0, 61, 94, 0.1);
            color: var(--primary);
        }

        .category-tab.active {
            background-color: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }

        .vote-progress {
            max-width: 700px;
            margin: 0 auto 50px;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background-color: rgba(0, 61, 94, 0.2);
            border-radius: 10px;
            position: relative;
            margin-bottom: 15px;
        }

        .progress-fill {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: linear-gradient(90deg, var(--primary-light), var(--primary));
            border-radius: 10px;
            transition: width 0.5s ease;
            width: 33.33%; /* Set depending on current position */
        }

        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
        }

        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .step-indicator {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--white);
            border: 2px solid var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .progress-step.active .step-indicator,
        .progress-step.completed .step-indicator {
            background-color: var(--primary);
            color: var(--white);
        }

        .step-label {
            font-size: 0.9rem;
            color: var(--gray);
            transition: all 0.3s ease;
        }

        .progress-step.active .step-label,
        .progress-step.completed .step-label {
            color: var(--primary);
            font-weight: 600;
        }

        /* Voting Form */
        .voting-form {
            max-width: 900px;
            margin: 0 auto;
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .voting-header {
            background: linear-gradient(135deg, var(--primary-light), var(--primary-dark));
            color: var(--white);
            padding: 20px 30px;
        }

        .position-title {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .position-description {
            opacity: 0.9;
            margin-top: 5px;
        }

        .voting-body {
            padding: 30px;
        }

        .candidate-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .candidate-card {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            cursor: pointer;
        }

        .candidate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-color: rgba(0, 61, 94, 0.3);
        }

        .candidate-card.selected {
            border-color: var(--primary);
            box-shadow: 0 5px 15px rgba(0, 61, 94, 0.2);
        }

        .candidate-card.selected::after {
            content: '\f058';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            top: 10px;
            right: 10px;
            color: var(--primary);
            font-size: 24px;
            background-color: var(--white);
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .candidate-image {
            height: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }

        .candidate-image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .candidate-info {
            padding: 20px;
        }

        .candidate-name {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--secondary);
        }

        .candidate-faculty {
            font-size: 0.9rem;
            color: var(--gray);
            margin-bottom: 15px;
        }

        .candidate-bio {
            font-size: 0.95rem;
            color: var(--dark);
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .view-manifesto {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .view-manifesto:hover {
            color: var(--primary-dark);
        }

        .view-manifesto i {
            margin-left: 5px;
        }

        .voting-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 61, 94, 0.3);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: rgba(0, 61, 94, 0.1);
        }

        .disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .disabled:hover {
            transform: none;
            box-shadow: none;
        }

        /* Confirmation Modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            width: 90%;
            max-width: 600px;
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0);
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-light), var(--primary-dark));
            color: var(--white);
            padding: 20px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .close-modal {
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .close-modal:hover {
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 30px;
        }

        .confirmation-message {
            text-align: center;
            margin-bottom: 30px;
        }

        .confirmation-icon {
            font-size: 60px;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .confirmation-text {
            font-size: 1.1rem;
            color: var(--secondary);
            line-height: 1.6;
        }

        .confirmation-choice {
            background-color: rgba(0, 61, 94, 0.1);
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .choice-label {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .choice-value {
            font-size: 1.2rem;
            color: var(--secondary);
        }

        .modal-footer {
            display: flex;
            justify-content: center;
            gap: 15px;
            padding: 0 30px 30px;
        }

        /* Success Message */
        .success-message {
            text-align: center;
            padding: 50px 30px;
            display: none;
        }

        .success-message.show {
            display: block;
            animation: fadeInUp 0.5s ease forwards;
        }

        .success-icon {
            font-size: 80px;
            color: var(--success);
            margin-bottom: 30px;
        }

        .success-title {
            font-size: 2rem;
            color: var(--secondary);
            margin-bottom: 20px;
        }

        .success-text {
            font-size: 1.1rem;
            color: var(--gray);
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .receipt-box {
            background-color: var(--light);
            border-radius: 10px;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto 30px;
            border: 1px dashed var(--gray);
        }

        .receipt-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }

        .receipt-label {
            font-weight: 600;
            color: var(--secondary);
        }

        .receipt-value {
            color: var(--dark);
        }

        .download-receipt {
            background-color: var(--primary);
            color: var(--white);
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .download-receipt:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 61, 94, 0.3);
        }

        .continue-btn {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .continue-btn:hover {
            background-color: rgba(0, 61, 94, 0.1);
        }

        /* Warning Banner */
        .warning-banner {
            background-color: rgba(255, 193, 7, 0.2);
            border-left: 4px solid var(--warning);
            padding: 15px 20px;
            margin-bottom: 30px;
            border-radius: 0 5px 5px 0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .warning-icon {
            color: var(--warning);
            font-size: 24px;
        }

        .warning-text {
            color: var(--dark);
            line-height: 1.5;
            font-size: 0.95rem;
        }

        /* Voting Sections */
        .voting-section {
            display: none;
        }

        .voting-section.active {
            display: block;
            animation: fadeInUp 0.5s ease forwards;
        }

        /* Category Progress */
        .categories-progress {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-bottom: 30px;
        }

        .category-pill {
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            background-color: var(--light);
            color: var(--gray);
            border: 1px solid #dee2e6;
        }

        .category-pill.completed {
            background-color: var(--success);
            color: var(--white);
            border-color: var(--success);
        }

        .category-pill.active {
            background-color: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeInUp {
            animation: fadeInUp 0.5s ease forwards;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .vote-title {
                font-size: 2rem;
            }

            .position-title {
                font-size: 1.5rem;
            }

            .candidate-cards {
                grid-template-columns: 1fr;
            }

            .voting-actions {
                flex-direction: column;
                gap: 15px;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .modal-content {
                width: 95%;
            }

            .success-title {
                font-size: 1.8rem;
            }

            .nav-links {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }
        }

        @media (max-width: 576px) {
            .vote-title {
                font-size: 1.8rem;
            }

            .position-title {
                font-size: 1.3rem;
            }

            .step-label {
                font-size: 0.8rem;
            }

            .voting-header,
            .voting-body,
            .modal-body,
            .modal-header {
                padding: 15px;
            }

            .receipt-box {
                padding: 15px;
            }

            .success-icon {
                font-size: 60px;
            }
        }

    </style>
    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navLinks = document.getElementById('navLinks');

        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileMenuBtn.innerHTML = navLinks.classList.contains('active')
                ? '<i class="fas fa-times"></i>'
                : '<i class="fas fa-bars"></i>';
        });

        // Category Tabs
        const categoryTabs = document.querySelectorAll('.category-tab');
        const votingSections = {
            executive: document.getElementById('executive-section'),
            faculty: document.getElementById('faculty-section'),
            school: document.getElementById('school-section')
        };

        categoryTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                categoryTabs.forEach(t => t.classList.remove('active'));

                // Add active class to clicked tab
                tab.classList.add('active');

                // Hide all voting sections
                Object.values(votingSections).forEach(section => {
                    section.classList.remove('active');
                });

                // Show selected voting section
                const category = tab.getAttribute('data-category');
                votingSections[category].classList.add('active');
            });
        });

        // Candidate Selection
        const candidateCards = document.querySelectorAll('.candidate-card');
        candidateCards.forEach(card => {
            card.addEventListener('click', () => {
                // Remove selected class from all cards in this section
                const parent = card.closest('.candidate-cards');
                parent.querySelectorAll('.candidate-card').forEach(c => {
                    c.classList.remove('selected');
                });

                // Add selected class to clicked card
                card.classList.add('selected');
            });
        });

        // Modal Handling
        const confirmationModal = document.getElementById('confirmation-modal');
        const closeModalBtn = document.getElementById('close-modal');
        const cancelVoteBtn = document.getElementById('cancel-vote');
        const confirmVoteBtn = document.getElementById('confirm-vote');
        const submitVoteBtn = document.getElementById('submit-vote-btn');
        const successMessage = document.getElementById('success-message');
        const otpSection = document.getElementById('otp-section');

        submitVoteBtn.addEventListener('click', () => {
            confirmationModal.classList.add('active');
        });

        closeModalBtn.addEventListener('click', () => {
            confirmationModal.classList.remove('active');
        });

        cancelVoteBtn.addEventListener('click', () => {
            confirmationModal.classList.remove('active');
        });

        confirmVoteBtn.addEventListener('click', () => {
            confirmationModal.classList.remove('active');

            // Hide all voting sections
            Object.values(votingSections).forEach(section => {
                section.style.display = 'none';
            });

            // Show OTP section
            otpSection.style.display = 'block';

            // Start OTP timer
            startOTPTimer();
        });

        // OTP Verification
        const otpInputs = document.querySelectorAll('.otp-input');
        const resendOTPBtn = document.getElementById('resend-otp');
        const verifyOTPBtn = document.getElementById('verify-otp');
        const otpTimer = document.getElementById('otp-timer');

        // OTP input navigation
        otpInputs.forEach(input => {
            input.addEventListener('input', (e) => {
                const value = e.target.value;
                const index = parseInt(e.target.getAttribute('data-index'));

                if (value.length === 1 && index < 6) {
                    otpInputs[index].focus();
                }
            });

            input.addEventListener('keydown', (e) => {
                const index = parseInt(e.target.getAttribute('data-index'));

                if (e.key === 'Backspace' && e.target.value === '' && index > 1) {
                    otpInputs[index - 2].focus();
                }
            });
        });

        // OTP Timer
        let otpTimeLeft = 300; // 5 minutes in seconds
        let otpTimerInterval;

        function startOTPTimer() {
            clearInterval(otpTimerInterval);
            otpTimeLeft = 300;
            updateOTPTimer();

            otpTimerInterval = setInterval(() => {
                otpTimeLeft--;
                updateOTPTimer();

                if (otpTimeLeft <= 0) {
                    clearInterval(otpTimerInterval);
                    otpTimer.textContent = '00:00';
                    verifyOTPBtn.disabled = true;
                }
            }, 1000);
        }

        function updateOTPTimer() {
            const minutes = Math.floor(otpTimeLeft / 60);
            const seconds = otpTimeLeft % 60;
            otpTimer.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }

        // Resend OTP
        resendOTPBtn.addEventListener('click', () => {
            // In a real app, this would call an API to resend OTP
            alert('A new OTP has been sent to your registered email and phone number.');
            startOTPTimer();

            // Clear existing OTP inputs
            otpInputs.forEach(input => {
                input.value = '';
            });
            otpInputs[0].focus();
            verifyOTPBtn.disabled = false;
        });

        // Verify OTP
        verifyOTPBtn.addEventListener('click', () => {
            // In a real app, this would verify the OTP with the server
            const otp = Array.from(otpInputs).map(input => input.value).join('');

            if (otp.length !== 6) {
                alert('Please enter a complete 6-digit OTP code.');
                return;
            }

            // For demo purposes, we'll assume any 6-digit code is valid
            clearInterval(otpTimerInterval);

            // Hide OTP section
            otpSection.style.display = 'none';

            // Show success message
            successMessage.classList.add('show');
        });

        // Next Buttons
        const nextBtnExecutive = document.getElementById('next-btn-executive');
        const nextBtnFaculty = document.getElementById('next-btn-faculty');

        nextBtnExecutive.addEventListener('click', () => {
            // In a real app, would save the selection first
            votingSections.executive.classList.remove('active');
            votingSections.faculty.classList.add('active');

            // Update category tabs
            categoryTabs.forEach(t => t.classList.remove('active'));
            document.querySelector('.category-tab[data-category="faculty"]').classList.add('active');
        });

        nextBtnFaculty.addEventListener('click', () => {
            // In a real app, would save the selection first
            votingSections.faculty.classList.remove('active');
            votingSections.school.classList.add('active');

            // Update category tabs
            categoryTabs.forEach(t => t.classList.remove('active'));
            document.querySelector('.category-tab[data-category="school"]').classList.add('active');
        });

        // Back to Top Button
        const backToTop = document.createElement('div');
        backToTop.className = 'back-to-top';
        backToTop.innerHTML = '<i class="fas fa-arrow-up"></i>';
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        document.body.appendChild(backToTop);

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
    </script>
@endsection
