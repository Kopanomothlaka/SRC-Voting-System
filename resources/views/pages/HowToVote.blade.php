@extends('layouts.app')

@section('title', 'How to Vote')

@section('content')



    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">How to Vote in the UNISA SRC Election</h1>
            <p class="page-subtitle">Follow our simple step-by-step guide to cast your vote and make your voice heard. Your participation matters!</p>
        </div>
    </section>

    <!-- How to Vote Steps -->
    <section class="how-to-vote">
        <div class="container">
            <div class="steps-grid">
                <div class="step-card animate">
                    <div class="step-image">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="step-content">
                        <span class="step-number">1</span>
                        <h3 class="step-title">Login to Your Student Portal</h3>
                        <p class="step-description">Access the UNISA student portal using your student number and password. Make sure your student credentials are up to date before the election day.</p>
                        <div class="step-tips">
                            <h4><i class="fas fa-lightbulb"></i> Tip</h4>
                            <ul>
                                <li>Reset your password a few days before if you're unsure</li>
                                <li>Use the official UNISA website or app to log in</li>
                                <li>Make sure your student status is active</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="step-card animate">
                    <div class="step-image">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="step-content">
                        <span class="step-number">2</span>
                        <h3 class="step-title">Access Election Portal</h3>
                        <p class="step-description">Once logged in, navigate to the "SRC Election 2025" section in your student dashboard. Look for the election banner or announcement.</p>
                        <div class="step-tips">
                            <h4><i class="fas fa-lightbulb"></i> Tip</h4>
                            <ul>
                                <li>The election portal is only available during voting period</li>
                                <li>Check the notifications area if you can't find it</li>
                                <li>Clear your browser cache if experiencing issues</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="step-card animate">
                    <div class="step-image">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="step-content">
                        <span class="step-number">3</span>
                        <h3 class="step-title">Review Candidates</h3>
                        <p class="step-description">Take time to review all candidate profiles, their manifestos, and proposed initiatives before making your selection.</p>
                        <div class="step-tips">
                            <h4><i class="fas fa-lightbulb"></i> Tip</h4>
                            <ul>
                                <li>Compare candidates based on their experience and vision</li>
                                <li>Consider candidates addressing issues important to you</li>
                                <li>Read their previous accomplishments if available</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="step-card animate">
                    <div class="step-image">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                    <div class="step-content">
                        <span class="step-number">4</span>
                        <h3 class="step-title">Cast Your Vote</h3>
                        <p class="step-description">Select your preferred candidate for each position. You can only vote once for each position available in the election.</p>
                        <div class="step-tips">
                            <h4><i class="fas fa-lightbulb"></i> Tip</h4>
                            <ul>
                                <li>You must vote for all positions to complete your ballot</li>
                                <li>Double-check your selection before submitting</li>
                                <li>You cannot change your vote once submitted</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="step-card animate">
                    <div class="step-image">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="step-content">
                        <span class="step-number">5</span>
                        <h3 class="step-title">Confirm Your Vote</h3>
                        <p class="step-description">Review your selections and confirm your vote. A confirmation dialog will ask you to finalize your choices.</p>
                        <div class="step-tips">
                            <h4><i class="fas fa-lightbulb"></i> Tip</h4>
                            <ul>
                                <li>Take your time to carefully review all selections</li>
                                <li>Ensure you're voting for the intended candidates</li>
                                <li>Read the confirmation message thoroughly</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="step-card animate">
                    <div class="step-image">
                        <i class="fas fa-receipt"></i>
                    </div>
                    <div class="step-content">
                        <span class="step-number">6</span>
                        <h3 class="step-title">Receive Confirmation</h3>
                        <p class="step-description">After submitting your vote, you'll receive a confirmation receipt. Save this receipt as proof of your participation.</p>
                        <div class="step-tips">
                            <h4><i class="fas fa-lightbulb"></i> Tip</h4>
                            <ul>
                                <li>Download or take a screenshot of your confirmation</li>
                                <li>You'll also receive an email confirmation</li>
                                <li>Check your spam folder if email doesn't arrive</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section">
        <div class="container">
            <h2 class="section-title">Election Timeline</h2>
            <div class="timeline">
                <div class="timeline-item left animate">
                    <div class="timeline-content">
                        <span class="timeline-date">May 1-14, 2025</span>
                        <h3 class="timeline-title">Candidate Nomination Period</h3>
                        <p class="timeline-text">Students interested in running for SRC positions submit their nominations and campaign materials.</p>
                    </div>
                </div>
                <div class="timeline-item right animate">
                    <div class="timeline-content">
                        <span class="timeline-date">May 15-20, 2025</span>
                        <h3 class="timeline-title">Verification Process</h3>
                        <p class="timeline-text">Electoral committee verifies candidate eligibility and finalizes the official candidate list.</p>
                    </div>
                </div>
                <div class="timeline-item left animate">
                    <div class="timeline-content">
                        <span class="timeline-date">May 21-30, 2025</span>
                        <h3 class="timeline-title">Campaign Period</h3>
                        <p class="timeline-text">Approved candidates campaign across campus and online platforms to share their vision.</p>
                    </div>
                </div>
                <div class="timeline-item right animate">
                    <div class="timeline-content">
                        <span class="timeline-date">June 1-3, 2025</span>
                        <h3 class="timeline-title">Voting Period</h3>
                        <p class="timeline-text">Students cast their votes for preferred candidates through the online portal.</p>
                    </div>
                </div>

                <div class="timeline-item left animate">
                    <div class="timeline-content">
                        <span class="timeline-date">June 1-3, 2025</span>
                        <h3 class="timeline-title">Voting Period</h3>
                        <p class="timeline-text">Students cast their votes for preferred candidates through the online portal.</p>
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

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--secondary);
            font-weight: 500;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .login-btn {
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            margin-left: 10px;
        }

        .login-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(177, 70, 194, 0.3);
        }

        .login-btn i {
            font-size: 16px;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--secondary);
            cursor: pointer;
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--primary-light), var(--primary-dark));
            color: var(--white);
            padding: 120px 0 60px;
            text-align: center;
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .page-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* How to Vote Main Content */
        .how-to-vote {
            padding: 80px 0;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .step-card {
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .step-image {
            width: 100%;
            height: 200px;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 50px;
        }

        .step-content {
            padding: 25px;
        }

        .step-number {
            display: inline-block;
            background-color: var(--primary);
            color: var(--white);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .step-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--secondary);
        }

        .step-description {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .step-tips {
            background-color: rgba(177, 70, 194, 0.1);
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
        }

        .step-tips h4 {
            color: var(--primary);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .step-tips ul {
            padding-left: 20px;
        }

        .step-tips li {
            margin-bottom: 8px;
            color: var(--secondary);
        }

        /* FAQ Section */
        .faq-section {
            padding: 60px 0;
            background-color: var(--white);
        }

        .section-title {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 60px;
            color: var(--secondary);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary);
        }

        .faq-accordion {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            margin-bottom: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .faq-question {
            background-color: var(--white);
            padding: 20px;
            font-weight: 600;
            color: var(--secondary);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .faq-question.active {
            border-left-color: var(--primary);
            color: var(--primary);
        }

        .faq-question i {
            transition: all 0.3s ease;
        }

        .faq-question.active i {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            background-color: var(--white);
            transition: all 0.3s ease;
        }

        .faq-answer.show {
            padding: 20px;
            max-height: 300px;
        }

        .faq-text {
            color: var(--gray);
            line-height: 1.6;
        }

        /* Video Tutorial */
        .video-tutorial {
            padding: 80px 0;
            background-color: var(--light);
        }

        .video-container {
            max-width: 800px;
            margin: 0 auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .video-placeholder {
            background-color: #f0f0f0;
            aspect-ratio: 16/9;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 50px;
            cursor: pointer;
            position: relative;
        }

        .video-placeholder i {
            font-size: 80px;
            margin-bottom: 20px;
        }

        .video-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .video-placeholder:hover::before {
            background-color: rgba(0, 0, 0, 0.2);
        }

        /* Support Section */
        .support-section {
            padding: 80px 0;
            background-color: var(--white);
        }

        .support-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .support-card {
            background-color: var(--light);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .support-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .support-icon {
            width: 70px;
            height: 70px;
            background-color: rgba(177, 70, 194, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 30px;
            color: var(--primary);
            transition: all 0.3s ease;
        }

        .support-card:hover .support-icon {
            background-color: var(--primary);
            color: var(--white);
        }

        .support-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--secondary);
        }

        .support-text {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .support-btn {
            display: inline-block;
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .support-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(177, 70, 194, 0.3);
        }

        /* Timeline */
        .timeline-section {
            padding: 80px 0;
            background-color: var(--light);
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: rgba(177, 70, 194, 0.2);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 10px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -10px;
            background-color: var(--white);
            border: 4px solid var(--primary);
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-item.left {
            left: 0;
        }

        .timeline-item.right {
            left: 50%;
        }

        .timeline-item.right::after {
            left: -10px;
        }

        .timeline-content {
            padding: 20px;
            background-color: var(--white);
            position: relative;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .timeline-date {
            display: inline-block;
            background-color: var(--primary);
            color: var(--white);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .timeline-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--secondary);
        }

        .timeline-text {
            color: var(--gray);
            line-height: 1.6;
        }

        /* Footer */
        footer {
            background-color: var(--secondary);
            color: var(--light);
            padding: 60px 0 30px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .footer-logo img {
            height: 40px;
            margin-right: 10px;
        }

        .footer-text {
            color: var(--light);
            opacity: 0.7;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
        }

        .footer-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--white);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--light);
            opacity: 0.7;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer-links a:hover {
            opacity: 1;
            color: var(--primary);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            text-align: center;
            color: var(--light);
            opacity: 0.7;
            font-size: 0.9rem;
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

        .animate {
            opacity: 0;
        }

        .animate.fadeInUp {
            animation: fadeInUp 1s ease forwards;
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            box-shadow: 0 5px 15px rgba(177, 70, 194, 0.3);
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 99;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background-color: var(--primary-dark);
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(177, 70, 194, 0.4);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item.right {
                left: 0;
            }

            .timeline-item::after {
                left: 21px;
                right: auto;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                padding: 15px;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: var(--white);
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                flex-direction: column;
                gap: 15px;
                z-index: 100;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links a {
                padding: 10px 0;
                width: 100%;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }

            .mobile-menu-btn {
                display: block;
            }

            .login-btn {
                font-size: 0.9rem;
                padding: 8px 20px;
            }

            .page-title {
                font-size: 2rem;
            }

            .step-tips ul {
                padding-left: 15px;
            }
        }

        @media (max-width: 576px) {
            .page-title {
                font-size: 1.8rem;
            }

            .login-btn span {
                display: none;
            }

            .login-btn i {
                margin-right: 0;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }

            .back-to-top {
                bottom: 20px;
                right: 20px;
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
        }
    </style>
    <!-- JavaScript -->



@endsection
