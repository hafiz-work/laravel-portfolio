@extends('layouts.app')

@section('title', 'Hafiz - Full Stack Developer Portfolio')

@section('content')
<!-- Hero Section with Gradient and Glassmorphism -->
<div class="hero-section position-relative overflow-hidden">
    <div class="hero-bg-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <div class="container position-relative py-5">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="hero-content">
                    <div class="hero-badge mb-4">
                        <span class="badge-modern">👋 Available for work</span>
                    </div>
                    <h1 class="hero-title mb-4">
                        Hi, I'm <span class="text-gradient">Hafiz</span><br>
                        Full Stack Developer
                    </h1>
                    <p class="hero-subtitle mb-5">
                        I create exceptional digital experiences through clean code and innovative solutions.
                        Specializing in Node.js, Flutter, and modern web technologies.
                    </p>
                    <div class="hero-actions d-flex gap-3 flex-wrap">
                        <a href="#projects" class="btn-modern btn-primary-modern">
                            <span>View My Work</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#contact" class="btn-modern btn-outline-modern">
                            <span>Let's Talk</span>
                            <i class="fas fa-message"></i>
                        </a>
                    </div>
                    <div class="hero-stats mt-5">
                        <div class="row">
                            <div class="col-4">
                                <div class="stat-item">
                                    <h3 class="stat-number">50+</h3>
                                    <p class="stat-label">Projects</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <h3 class="stat-number">3+</h3>
                                    <p class="stat-label">Years Exp</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-item">
                                    <h3 class="stat-number">25+</h3>
                                    <p class="stat-label">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="hero-image-container">
                    <div class="hero-image-bg"></div>
                    <img src="https://i.pravatar.cc/400?img={{ rand(1,70) }}"
                        alt="Hafiz Profile"
                        class="hero-image">
                    <div class="floating-cards">
                        <div class="floating-card card-1">
                            <i class="fab fa-node-js"></i>
                            <span>Node.js</span>
                        </div>
                        <div class="floating-card card-2">
                            <i class="fab fa-flutter"></i>
                            <span>Flutter</span>
                        </div>
                        <div class="floating-card card-3">
                            <i class="fas fa-database"></i>
                            <span>MongoDB</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<section id="about" class="section-padding bg-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-badge">About Me</span>
            <h2 class="section-title">Crafting Digital Solutions</h2>
            <p class="section-subtitle">
                Passionate about creating seamless user experiences and robust backend systems
            </p>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <p class="lead mb-4">
                        I'm a dedicated full-stack developer with a passion for creating innovative digital solutions.
                        My expertise spans across modern web technologies and mobile development.
                    </p>
                    <p class="mb-4">
                        When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects,
                        or sharing knowledge with the developer community.
                    </p>
                    <div class="about-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-code text-primary"></i>
                            <span>Clean, maintainable code</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-mobile-alt text-primary"></i>
                            <span>Mobile-first approach</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-rocket text-primary"></i>
                            <span>Performance optimization</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="skills-visual">
                    <div class="skill-circle">
                        <div class="skill-item" data-skill="95">
                            <span class="skill-name">Node.js</span>
                            <div class="skill-progress">
                                <div class="skill-bar" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="skill-item" data-skill="90">
                            <span class="skill-name">Flutter</span>
                            <div class="skill-progress">
                                <div class="skill-bar" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item" data-skill="85">
                            <span class="skill-name">MongoDB</span>
                            <div class="skill-progress">
                                <div class="skill-bar" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="skill-item" data-skill="88">
                            <span class="skill-name">Express.js</span>
                            <div class="skill-progress">
                                <div class="skill-bar" style="width: 88%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section-padding">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-badge">Services</span>
            <h2 class="section-title">What I Do Best</h2>
            <p class="section-subtitle">Comprehensive development services tailored to your needs</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-card glass-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h4 class="service-title">Mobile Development</h4>
                    <p class="service-description">
                        Cross-platform mobile apps using Flutter with beautiful UI and seamless performance.
                    </p>
                    <div class="service-tech">
                        <span class="tech-tag">Flutter</span>
                        <span class="tech-tag">Dart</span>
                        <span class="tech-tag">Firebase</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card glass-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h4 class="service-title">Backend Development</h4>
                    <p class="service-description">
                        Scalable server-side solutions with Node.js, Express, and robust database integration.
                    </p>
                    <div class="service-tech">
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">Express</span>
                        <span class="tech-tag">MongoDB</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card glass-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4 class="service-title">Web Development</h4>
                    <p class="service-description">
                        Modern web applications with responsive design and optimal user experience.
                    </p>
                    <div class="service-tech">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">Laravel</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="section-padding bg-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-badge">Portfolio</span>
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">A showcase of my recent work and achievements</p>
        </div>

        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-lg-6">
                <div class="project-card glass-card">
                    <div class="project-image">
                        <img src="/api/placeholder/600/400" alt="E-Commerce Platform" class="img-fluid">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Web Application</div>
                        <h4 class="project-title">E-Commerce Platform</h4>
                        <p class="project-description">
                            Full-stack e-commerce solution with admin dashboard, payment integration,
                            and inventory management.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">Express</span>
                            <span class="tech-tag">MongoDB</span>
                            <span class="tech-tag">React</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-lg-6">
                <div class="project-card glass-card">
                    <div class="project-image">
                        <img src="/api/placeholder/600/400" alt="Delivery Mobile App" class="img-fluid">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Mobile App</div>
                        <h4 class="project-title">Delivery Mobile App</h4>
                        <p class="project-description">
                            Cross-platform delivery app with real-time tracking, push notifications,
                            and secure payments.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Flutter</span>
                            <span class="tech-tag">Dart</span>
                            <span class="tech-tag">Firebase</span>
                            <span class="tech-tag">Node.js</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-lg-12">
                <div class="project-card glass-card project-featured">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="project-image">
                                <img src="/api/placeholder/800/500" alt="Analytics Dashboard" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-content">
                                <div class="project-category">Featured Project</div>
                                <h3 class="project-title">Analytics Dashboard</h3>
                                <p class="project-description">
                                    Comprehensive business intelligence dashboard with real-time data visualization,
                                    interactive charts, and advanced reporting capabilities. Built with modern
                                    technologies for optimal performance and user experience.
                                </p>
                                <div class="project-features">
                                    <div class="feature-item">
                                        <i class="fas fa-chart-line"></i>
                                        <span>Real-time Analytics</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-mobile-alt"></i>
                                        <span>Responsive Design</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <span>Secure Authentication</span>
                                    </div>
                                </div>
                                <div class="project-tech">
                                    <span class="tech-tag">Node.js</span>
                                    <span class="tech-tag">Express</span>
                                    <span class="tech-tag">MongoDB</span>
                                    <span class="tech-tag">Chart.js</span>
                                    <span class="tech-tag">Socket.io</span>
                                </div>
                                <div class="project-links mt-4">
                                    <a href="#" class="btn-modern btn-primary-modern me-3">
                                        <span>Live Demo</span>
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="#" class="btn-modern btn-outline-modern">
                                        <span>View Code</span>
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-badge">Contact</span>
            <h2 class="section-title">Let's Work Together</h2>
            <p class="section-subtitle">Ready to bring your ideas to life? Let's connect!</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-container">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="contact-card glass-card text-center">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h5>Email</h5>
                                <a href="mailto:hafiz@example.com" class="contact-link">
                                    hafiz@example.com
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-card glass-card text-center">
                                <div class="contact-icon">
                                    <i class="fab fa-linkedin"></i>
                                </div>
                                <h5>LinkedIn</h5>
                                <a href="#" class="contact-link">
                                    /in/hafiz-dev
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-card glass-card text-center">
                                <div class="contact-icon">
                                    <i class="fab fa-github"></i>
                                </div>
                                <h5>GitHub</h5>
                                <a href="#" class="contact-link">
                                    github.com/hafiz
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <a href="mailto:hafiz@example.com" class="btn-modern btn-primary-modern btn-lg">
                            <span>Start a Project</span>
                            <i class="fas fa-rocket"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="footer-text mb-0">
                    &copy; {{ date('Y') }} Hafiz. Crafted with <i class="fas fa-heart text-danger"></i>
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection