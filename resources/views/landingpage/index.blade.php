<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MoneyFlow</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
<link href="{{ asset('assets/img/Logo_MoneyFlow.png') }}" rel="icon">
<link href="{{ asset('assets/img/Logo_MoneyFlow.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Invent
  * Template URL: https://bootstrapmade.com/invent-bootstrap-business-template/
  * Updated: May 12 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="{{ asset('assets/img/Logo-MoneyFlow-fulltext-icon-nobg.png') }}"  class="logo-header" alt="MoneyFlow Logo" >
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#how-we-work">Guide</a></li>
          <li><a href="#services">Features</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="authentication">
    @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn-getstarted">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="btn-getstarted">
                    Log in
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-getstarted">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</div>


    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="badge-wrapper mb-3">
              <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                <div class="icon-circle me-2">
                  <i class="bi bi-bell"></i>
                </div>
                <span class="badge-text me-3">Innovative Solutions</span>
              </div>
            </div>

            <h1 class="hero-title mb-4"> Manage Your Finances with Confidence</h1>

            <p class="hero-description mb-4">A simple and powerful tool to track income, expenses, and stay on top of your budget.</p>

            <div class="cta-wrapper">
              <a href="#" class="btn btn-primary">Get Started</a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image">
              <img src="assets/img/illustration/illustration-16.webp" alt="Business Growth" class="img-fluid" loading="lazy">
            </div>
          </div>
        </div>

        <div class="row feature-boxes">
          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-graph-up"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Easy Financial Tracking</h3>
                <p class="feature-text">Track your income and expenses effortlessly with a simple, user-friendly interface. Stay on top of your finances without the hassle.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-shield-lock"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title"> Data Privacy & Security</h3>
                <p class="feature-text">Your financial data is encrypted and only accessible by you. We prioritize your privacy and confidentiality.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-bar-chart-line"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Insightful Reports</h3>
                <p class="feature-text">Generate monthly and yearly reports to understand your spending patterns and manage your money smarter.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">About Us</p>
            <h3>Why Choose Our Personal Finance App?</h3>
            <p class="fst-italic">
              This application helps you take control of your financial life. Whether you're budgeting for groceries, tracking monthly income, or preparing reports, we've got you covered.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Easy-to-use interface.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Safe & secure data.</span></li>
              <li><i class="bi bi-check-circle"></i> <span> Works across all devices.</span></li>
            </ul>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="assets/img/about/about-portrait-1.webp" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/about/about-8.webp" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="assets/img/about/about-12.webp" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- How We Work Section -->
    <section id="how-we-work" class="how-we-work section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>How It Works</h2>
        <p>Step-by-step guide to using our Personal Finance App:</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="steps-5">
          <div class="process-container">

            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <span class="step-number">01</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-person-plus"></i>
                  </div>
                  <div class="step-content">
                    <h3>Create an Account</h3>
                    <p>Sign up quickly with your email and password to get started.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
              <div class="content">
                <span class="step-number">02</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-box-arrow-in-right"></i>
                  </div>
                  <div class="step-content">
                    <h3>Log In Securely</h3>
                    <p>Access your personal dashboard with protected login.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="400">
              <div class="content">
                <span class="step-number">03</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-plus-circle"></i>
                  </div>
                  <div class="step-content">
                    <h3>Set Categories & Budgets</h3>
                    <p>Organize your finances by labeling transactions and setting monthly limits.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="500">
              <div class="content">
                <span class="step-number">04</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-wallet2"></i>
                  </div>
                  <div class="step-content">
                    <h3>Add Transactions</h3>
                    <p>Record your income and expenses with just a few clicks.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="500">
              <div class="content">
                <span class="step-number">05</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-speedometer2"></i>
                  </div>
                  <div class="step-content">
                    <h3>View Your Dashboard</h3>
                    <p>See an overview of your financial health with clear charts and summaries.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="500">
              <div class="content">
                <span class="step-number">06</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-bar-chart-line"></i>
                  </div>
                  <div class="step-content">
                    <h3>Generate Reports</h3>
                    <p>Get insights on your spending patterns monthly or yearly.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

          </div>
        </div>

      </div>

    </section><!-- /How We Work Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Core Features That Empower Your Finances</h2>
        <p>Discover powerful tools designed to help you manage, track, and grow your financial goals with ease.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-5">

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-graph-up"></i>
              </div>
              <div class="service-content">
                <h3>Dashboard Overview</h3>
                <p>Get a quick summary of your total income, expenses, and balance with insightful charts.</p>
                <a href="#" class="service-link">
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-cash-stack"></i>
              </div>
              <div class="service-content">
                <h3>Income & Expense Tracking</h3>
                <p>Easily record every transaction and categorize them for better clarity.</p>
                <a href="#" class="service-link">
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-tags"></i>
              </div>
              <div class="service-content">
                <h3>Customizable Categories</h3>
                <p>Create and manage your own income and expense categories based on your lifestyle.</p>
                <a href="#" class="service-link">
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-calendar-range"></i>
              </div>
              <div class="service-content">
                <h3>Monthly & Yearly Reports</h3>
                <p>View detailed financial reports to track your progress over time.</p>
                <a href="#" class="service-link">
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-bell-fill"></i>
              </div>
              <div class="service-content">
                <h3>Budget Alerts & Reminders</h3>
                <p>Set monthly spending limits and get alerts before you overspend.</p>
                <a href="#" class="service-link">
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
              <div class="service-content">
                <h3>Secure Authentication</h3>
                <p>Your data is safe with secure login, registration, and session management.</p>
                <a href="#" class="service-link">
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Services Alt Section -->
    <section id="services-alt" class="services-alt section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">


      </div>

    </section><!-- /Services Alt Section -->

    <!-- Call To Action 2 Section -->
    <section id="call-to-action-2" class="call-to-action-2 section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="cta-image-wrapper">
              <img src="{{ asset('assets/img/img1.png') }}" alt="Call to Action" class="img-fluid rounded-4">
              <div class="cta-pattern"></div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="cta-content">
              <h2>Take Control of Your Personal Finances with MoneyFlow</h2>
              <p class="lead">MoneyFlow helps you effortlessly track your income and expenses, view insightful summaries, and generate custom financial reports based on time or category. Manage your budget with clarity—anytime, anywhere.</p>

              <div class="cta-features">
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="400">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Monitor income and expenses in real-time</span>
                </div>
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="450">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Monthly financial summaries and charts</span>
                </div>
                <div class="feature-item" data-aos="zoom-in" data-aos-delay="500">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Smart filters and customizable reports</span>
                </div>
              </div>

              <div class="cta-action mt-5">
                <a href="#" class="btn btn-primary btn-lg me-3">Get Started</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action 2 Section -->


    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="faq-contact-card">
              <div class="card-icon">
                <i class="bi bi-question-circle"></i>
              </div>
              <div class="card-content">
                <h3>Still Have Questions?</h3>
                <p>We're here to help! If you have any questions, feedback, or encounter any issues while using MoneyFlow, feel free to reach out to our support team. We’ll respond as quickly as possible to assist you.</p>
                <div class="contact-options">
                  <a href="#contact" class="contact-option">
                    <i class="bi bi-envelope"></i>
                    <span>Email Support</span>
                  </a>
                  <!-- <a href="#" class="contact-option">
                    <i class="bi bi-chat-dots"></i>
                    <span>Live Chat</span>
                  </a> -->
                  <a href="#contact" class="contact-option">
                    <i class="bi bi-telephone"></i>
                    <span>Call Us</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-accordion">
              <div class="faq-item faq-active">
                <div class="faq-header">
                  <h3>What is MoneyFlow and what does it do?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    MoneyFlow is a personal finance management web application that helps you record and monitor your income and expenses, track your financial summaries, and generate reports based on time periods or categories.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="faq-header">
                  <h3>How can I categorize my income and expenses?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    You can create custom categories for both income and expense transactions (e.g., Salary, Food, Transport) and manage them in the Categories section.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item">
                <div class="faq-header">
                  <h3>How do financial reports work in MoneyFlow?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    In the Reports section, you can view detailed monthly and yearly reports. You can also filter your transactions by month, year, or category.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item">
                <div class="faq-header">
                  <h3>Is there a way to set spending limits or budgets?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Yes. If the Budget Reminder feature is enabled, you can set a monthly expense limit. You’ll receive a notification when your expenses reach or exceed 80% of your set limit.
                  </p>
                </div>
              </div><!-- End FAQ Item-->
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>et our users tell you how MoneyFlow made a difference.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    MoneyFlow completely changed the way I manage my budget. I can now track every expense without stress.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-m-8.webp" alt="Profile Image">
                    <div>
                      <h3>Sarah M</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    As a small business owner, this app helps me separate my personal and business finances easily. Love it!
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-f-3.webp" alt="Profile Image">
                    <div>
                      <h3>Lisa Williams</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    I used to write down everything manually. MoneyFlow saves me time and helps me stay in control.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-f-10.webp" alt="Profile Image">
                    <div>
                      <h3>Alina T</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    The monthly reports and visual graphs are super helpful. I can finally understand where my money goes.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-m-5.webp" alt="Profile Image">
                    <div>
                      <h3>David Miller</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Setting a spending limit and getting alerts when I’m close to it really keeps me accountable.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-m-2.webp" alt="Profile Image">
                    <div>
                      <h3>Michael Davis</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Simple, clean interface. I was able to get started in minutes. Highly recommended for personal finance.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-f-7.webp" alt="Profile Image">
                    <div>
                      <h3>Sarah Thompson</h3>
                   
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Your insights matter! Let us know how we can improve your experience with MoneyFlow.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <h3>Our Address</h3>
              <p>Jl. Setu Indah, No. 116, Jawa Barat</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <h3>Contact Number</h3>
              <p>Phone: (021) 7863191</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <h3>Email Support</h3>
              <p>Email: info@nurulfikri.ac.id</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Email address*" required="">
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-list"></i></span>
                      <select name="subject" class="form-control" required="">
                        <option value="">--Select service--</option>
                        <option value="Service 1">Feedback</option>
                        <option value="Service 2">Report a bug</option>
                        <option value="Service 3">Request feature</option>
                        <option value="Service 4">Support</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                      <textarea class="form-control" name="message" rows="6" placeholder="Write a message*" required=""></textarea>
                    </div>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center">
                    <button type="submit">Submit Message</button>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">MyWebsite</span>
          </a>
          <div class="contact"><p>MoneyFlow helps you take control of your personal finances with ease. Record your income and expenses, monitor your spending habits, and get clear financial insights—all in one place. Stay organized and reach your financial goals faster with our simple and intuitive tools.</p></div>
          <!-- <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div> -->
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Guide</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MyWebsite</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>