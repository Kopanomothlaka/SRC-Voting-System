@extends('layouts.app')

@section('title', 'Candidates')

@section('content')

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">Meet Your SRC Candidates</h1>
            <p class="page-subtitle">Get to know the students running for the 2025 Student Representative Council. Review their profiles, manifestos, and vision for UNISA's future.</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="container">
            <div class="filter-container">
                <div class="filter-group">
                    <span class="filter-label">Position:</span>
                    <select class="filter-select" id="positionFilter">
                        <option value="all">All Positions</option>
                        <option value="president">President</option>
                        <option value="deputy-president">Deputy President</option>
                        <option value="secretary">Secretary General</option>
                        <option value="treasurer">Treasurer</option>
                        <option value="academic-officer">Academic Officer</option>
                        <option value="welfare-officer">Student Welfare Officer</option>
                    </select>
                </div>

                <div class="filter-group">
                    <span class="filter-label">Faculty:</span>
                    <select class="filter-select" id="facultyFilter">
                        <option value="all">All Faculties</option>
                        <option value="science">Science & Technology</option>
                        <option value="humanities">Humanities</option>
                        <option value="economic">Economic & Management Sciences</option>
                        <option value="law">Law</option>
                        <option value="education">Education</option>
                        <option value="health">Health Sciences</option>
                    </select>
                </div>

                <div class="filter-group">
                    <span class="filter-label">Year:</span>
                    <select class="filter-select" id="yearFilter">
                        <option value="all">All Years</option>
                        <option value="first">First Year</option>
                        <option value="second">Second Year</option>
                        <option value="third">Third Year</option>
                        <option value="fourth">Fourth Year</option>
                        <option value="postgrad">Postgraduate</option>
                    </select>
                </div>

                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search candidates...">
                </div>
            </div>
        </div>
    </section>

    <!-- Presidential Candidates -->
    <section class="candidates-section">
        <div class="container">
            <div class="position-section">
                <h2 class="position-title">Presidential Candidates</h2>
                <div class="candidates-grid">
                    <!-- Presidential Candidate 1 -->
                    <div class="candidate-card">
                        <span class="candidate-position">President</span>
                        <img src="/api/placeholder/400/300" alt="Candidate" class="candidate-image">
                        <div class="candidate-content">
                            <h3 class="candidate-name">Thabo Mokoena</h3>
                            <div class="candidate-faculty">
                                <i class="fas fa-graduation-cap"></i> Economic & Management Sciences, 3rd Year
                            </div>
                            <p class="candidate-bio">
                                Passionate about creating an inclusive campus environment with transparent leadership. Advocating for improved academic resources and student support services.
                            </p>
                            <div class="candidate-stats">
                                <div class="stat-item">
                                    <div class="stat-number">3.8</div>
                                    <div class="stat-label">GPA</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">2</div>
                                    <div class="stat-label">Prev. Positions</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">4</div>
                                    <div class="stat-label">Projects</div>
                                </div>
                            </div>
                            <div class="candidate-actions">
                                <button class="candidate-btn view-profile-btn">
                                    <i class="fas fa-user"></i> View Profile
                                </button>
                                <button class="candidate-btn download-manifesto-btn">
                                    <i class="fas fa-file-pdf"></i> Manifesto
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Presidential Candidate 2 -->
                    <div class="candidate-card">
                        <span class="candidate-position">President</span>
                        <img src="/api/placeholder/400/300" alt="Candidate" class="candidate-image">
                        <div class="candidate-content">
                            <h3 class="candidate-name">Nomzamo Dlamini</h3>
                            <div class="candidate-faculty">
                                <i class="fas fa-graduation-cap"></i> Law, 4th Year
                            </div>
                            <p class="candidate-bio">
                                Committed to student advocacy and promoting academic excellence. Focus on strengthening student governance and ensuring adequate representation.
                            </p>
                            <div class="candidate-stats">
                                <div class="stat-item">
                                    <div class="stat-number">3.9</div>
                                    <div class="stat-label">GPA</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">3</div>
                                    <div class="stat-label">Prev. Positions</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">6</div>
                                    <div class="stat-label">Projects</div>
                                </div>
                            </div>
                            <div class="candidate-actions">
                                <button class="candidate-btn view-profile-btn">
                                    <i class="fas fa-user"></i> View Profile
                                </button>
                                <button class="candidate-btn download-manifesto-btn">
                                    <i class="fas fa-file-pdf"></i> Manifesto
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Presidential Candidate 3 -->
                    <div class="candidate-card">
                        <span class="candidate-position">President</span>
                        <img src="/api/placeholder/400/300" alt="Candidate" class="candidate-image">
                        <div class="candidate-content">
                            <h3 class="candidate-name">Michael van der Merwe</h3>
                            <div class="candidate-faculty">
                                <i class="fas fa-graduation-cap"></i> Science & Technology, 3rd Year
                            </div>
                            <p class="candidate-bio">
                                Focused on implementing innovative solutions to student challenges. Experience in various student bodies with a track record of successful initiatives.
                            </p>
                            <div class="candidate-stats">
                                <div class="stat-item">
                                    <div class="stat-number">3.7</div>
                                    <div class="stat-label">GPA</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">2</div>
                                    <div class="stat-label">Prev. Positions</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">5</div>
                                    <div class="stat-label">Projects</div>
                                </div>
                            </div>
                            <div class="candidate-actions">
                                <button class="candidate-btn view-profile-btn">
                                    <i class="fas fa-user"></i> View Profile
                                </button>
                                <button class="candidate-btn download-manifesto-btn">
                                    <i class="fas fa-file-pdf"></i> Manifesto
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deputy President Candidates -->
            <div class="position-section">
                <h2 class="position-title">Deputy Presidential Candidates</h2>
                <div class="candidates-grid">
                    <!-- Deputy Presidential Candidate 1 -->
                    <div class="candidate-card">
                        <span class="candidate-position">Deputy President</span>
                        <img src="/api/placeholder/400/300" alt="Candidate" class="candidate-image">
                        <div class="candidate-content">
                            <h3 class="candidate-name">Lerato Molefe</h3>
                            <div class="candidate-faculty">
                                <i class="fas fa-graduation-cap"></i> Humanities, 3rd Year
                            </div>
                            <p class="candidate-bio">
                                Dedicated to fostering a diverse and inclusive campus community. Advocate for mental health awareness and support services for all students.
                            </p>
                            <div class="candidate-stats">
                                <div class="stat-item">
                                    <div class="stat-number">3.6</div>
                                    <div class="stat-label">GPA</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">1</div>
                                    <div class="stat-label">Prev. Positions</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">3</div>
                                    <div class="stat-label">Projects</div>
                                </div>
                            </div>
                            <div class="candidate-actions">
                                <button class="candidate-btn view-profile-btn">
                                    <i class="fas fa-user"></i> View Profile
                                </button>
                                <button class="candidate-btn download-manifesto-btn">
                                    <i class="fas fa-file-pdf"></i> Manifesto
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Deputy Presidential Candidate 2 -->
                    <div class="candidate-card">
                        <span class="candidate-position">Deputy President</span>
                        <img src="/api/placeholder/400/300" alt="Candidate" class="candidate-image">
                        <div class="candidate-content">
                            <h3 class="candidate-name">Samuel Nkosi</h3>
                            <div class="candidate-faculty">
                                <i class="fas fa-graduation-cap"></i> Economic & Management Sciences, 4th Year
                            </div>
                            <p class="candidate-bio">
                                Experienced leader focused on improving student-staff collaboration. Committed to enhancing academic support systems and extracurricular opportunities.
                            </p>
                            <div class="candidate-stats">
                                <div class="stat-item">
                                    <div class="stat-number">3.9</div>
                                    <div class="stat-label">GPA</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">2</div>
                                    <div class="stat-label">Prev. Positions</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">4</div>
                                    <div class="stat-label">Projects</div>
                                </div>
                            </div>
                            <div class="candidate-actions">
                                <button class="candidate-btn view-profile-btn">
                                    <i class="fas fa-user"></i> View Profile
                                </button>
                                <button class="candidate-btn download-manifesto-btn">
                                    <i class="fas fa-file-pdf"></i> Manifesto
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more position sections as needed -->

        </div>
    </section>

    <!-- Compare Candidates Section -->
    <section class="compare-section">
        <div class="container">
            <div class="compare-container">
                <p class="compare-text">Having trouble deciding? Compare up to 3 candidates side-by-side to see their platforms, experience, and proposals.</p>
                <button class="compare-btn">
                    <i class="fas fa-balance-scale"></i> Compare Candidates
                </button>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <div class="container">
        <div class="pagination">
            <div class="pagination-item active">1</div>
            <div class="pagination-item">2</div>
            <div class="pagination-item">3</div>
            <div class="pagination-item">4</div>
            <div class="pagination-item">5</div>
        </div>
    </div>




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

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Filter Functionality
        const filters = {
            position: document.getElementById('positionFilter'),
            faculty: document.getElementById('facultyFilter'),
            year: document.getElementById('yearFilter'),
            search: document.querySelector('.search-box input')
        };

        // Add event listeners for filters
        Object.values(filters).forEach(filter => {
            filter.addEventListener('change', updateCandidates);
        });

        function updateCandidates() {
            // Add filter logic here
            console.log('Updating candidate filters...');
        }

        // Animation on Scroll
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






<style>




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

    /* Filter Section */
    .filter-section {
      background-color: var(--white);
      padding: 30px 0;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .filter-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 15px;
    }

    .filter-group {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .filter-label {
      font-weight: 600;
      color: var(--secondary);
    }

    .filter-select {
      padding: 8px 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      background-color: var(--white);
      color: var(--secondary);
      font-size: 0.9rem;
      min-width: 150px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .filter-select:focus {
      border-color: var(--primary);
      outline: none;
      box-shadow: 0 0 0 3px rgba(177, 70, 194, 0.1);
    }

    .search-box {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 8px 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      background-color: var(--white);
      min-width: 250px;
    }

    .search-box input {
      border: none;
      background: none;
      flex-grow: 1;
      color: var(--secondary);
      font-size: 0.9rem;
    }

    .search-box input:focus {
      outline: none;
    }

    .search-box i {
      color: var(--gray);
    }

    /* Candidates Section */
    .candidates-section {
      padding: 60px 0;
    }

    .section-title {
      font-size: 2rem;
      text-align: center;
      margin-bottom: 50px;
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

    .candidates-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
    }

    .candidate-card {
      background-color: var(--white);
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      position: relative;
    }

    .candidate-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .candidate-position {
      background-color: var(--primary);
      color: var(--white);
      padding: 5px 15px;
      font-size: 0.8rem;
      font-weight: 600;
      position: absolute;
      right: 0;
      top: 20px;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
      z-index: 1;
    }

    .candidate-image {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-bottom: 4px solid var(--primary);
    }

    .candidate-content {
      padding: 25px;
    }

    .candidate-name {
      font-size: 1.4rem;
      font-weight: 700;
      margin-bottom: 5px;
      color: var(--secondary);
    }

    .candidate-faculty {
      color: var(--gray);
      font-size: 0.9rem;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .candidate-bio {
      color: var(--secondary);
      line-height: 1.6;
      margin-bottom: 20px;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .candidate-stats {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .stat-item {
      text-align: center;
      flex-grow: 1;
      padding: 10px;
      border-right: 1px solid #eee;
    }

    .stat-item:last-child {
      border-right: none;
    }

    .stat-number {
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 5px;
    }

    .stat-label {
      font-size: 0.8rem;
      color: var(--gray);
    }

    .candidate-actions {
      display: flex;
      gap: 15px;
    }

    .candidate-btn {
      flex-grow: 1;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-weight: 600;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      transition: all 0.3s ease;
    }

    .view-profile-btn {
      background-color: var(--primary);
      color: var(--white);
    }

    .view-profile-btn:hover {
      background-color: var(--primary-dark);
      box-shadow: 0 5px 15px rgba(177, 70, 194, 0.3);
    }

    .download-manifesto-btn {
      background-color: rgba(177, 70, 194, 0.1);
      color: var(--primary);
    }

    .download-manifesto-btn:hover {
      background-color: rgba(177, 70, 194, 0.2);
    }

    /* Position Sections */
    .position-section {
      padding: 40px 0;
    }

    .position-title {
      font-size: 1.5rem;
      margin-bottom: 30px;
      color: var(--secondary);
      border-left: 4px solid var(--primary);
      padding-left: 15px;
    }

    /* Pagination */
    .pagination {
      margin-top: 50px;
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    .pagination-item {
      width: 40px;
      height: 40px;
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: var(--white);
      color: var(--secondary);
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .pagination-item:hover {
      background-color: rgba(177, 70, 194, 0.1);
      color: var(--primary);
    }

    .pagination-item.active {
      background-color: var(--primary);
      color: var(--white);
    }

    /* Compare Candidates */
    .compare-section {
      padding: 80px 0;
      background-color: var(--white);
    }

    .compare-container {
      background-color: rgba(177, 70, 194, 0.05);
      border-radius: 15px;
      padding: 40px;
      text-align: center;
    }

    .compare-text {
      font-size: 1.2rem;
      color: var(--secondary);
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .compare-btn {
      background-color: var(--primary);
      color: var(--white);
      border: none;
      border-radius: 50px;
      padding: 12px 30px;
      font-weight: 600;
      font-size: 1.1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    .compare-btn:hover {
      background-color: var(--primary-dark);
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(177, 70, 194, 0.3);
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

      .filter-container {
        flex-direction: column;
        align-items: stretch;
      }

      .filter-group {
        flex-direction: column;
        align-items: flex-start;
      }

      .filter-select, .search-box {
        width: 100%;
      }

      .compare-container {
        padding: 30px 20px;
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

      .candidate-actions {
        flex-direction: column;
      }

      .pagination-item {
        width: 35px;
        height: 35px;
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

@endsection
