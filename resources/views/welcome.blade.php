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
                    <img src="https://media.licdn.com/dms/image/v2/D5603AQE9pMt6OmjgTA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1722946421123?e=1753315200&v=beta&t=JQMXwUIU8DEA0PP4z6oK_J6wS996QoIAI5F_jCV-XUU"
                        alt="Hafiz Profile"
                        class="hero-image">
                    <div class="floating-cards">
                        <div class="floating-card card-1">
                            <i class="fab fa-node-js"></i>
                            <span>Node.js</span>
                        </div>
                        <div class="floating-card card-2">
                            <i class="fa-brands fa-flutter"></i>
                            <span>Flutter</span>
                        </div>
                        <div class="floating-card card-3">
                            <i class="fab fa-envira"></i>
                            <span>MongoDB</span>
                        </div>
                        <div class="floating-card card-4">
                            <i class="fas fa-database"></i>
                            <span>PostgreSQL</span>
                        </div>
                        <div class="floating-card card-5">
                            <i class="fab fa-react"></i>
                            <span>React Native</span>
                        </div>
                        <div class="floating-card card-6">
                            <i class="fab fa-laravel"></i>
                            <span>Laravel</span>
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
                        I'm a full-stack developer specializing in building scalable web and mobile applications using Laravel, Node.js, Flutter, and modern JavaScript frameworks. My experience includes delivering robust solutions for government, enterprise, and fintech clients.
                    </p>
                    <p class="mb-4">
                        I've led and contributed to projects such as ePerolehan DBKL (digital procurement), CIT Receipt Book (secure cash-in-transit management), and Wetrack System (secure code delivery for ATM operations). My focus is on clean architecture, API development, and seamless user experiences.
                    </p>
                    <div class="about-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-code text-primary"></i>
                            <span>Clean, maintainable code</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-network-wired text-primary"></i>
                            <span>API & backend expertise</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-mobile-alt text-primary"></i>
                            <span>Cross-platform mobile apps</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-rocket text-primary"></i>
                            <span>Performance & security</span>
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
                        <div class="skill-item" data-skill="80">
                            <span class="skill-name">PostgreSQL</span>
                            <div class="skill-progress">
                                <div class="skill-bar" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="skill-item" data-skill="83">
                            <span class="skill-name">Docker</span>
                            <div class="skill-progress">
                                <div class="skill-bar" style="width: 83%"></div>
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
            <p class="section-subtitle">Comprehensive development solutions to bring your vision to life.</p>
        </div>

        <div class="row g-4 justify-content-center"> {{-- Added justify-content-center for better alignment if cols don't fill a row --}}

            <div class="col-lg-4 col-md-6">
                <div class="service-card glass-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h4 class="service-title">Mobile App Development</h4>
                    <p class="service-description">
                        I craft **high-performance, cross-platform mobile applications** using modern frameworks. From elegant user interfaces to robust backend integrations, I build apps that deliver seamless user experiences on both iOS and Android.
                    </p>
                    <div class="service-details mt-4">
                        <h6 class="text-secondary">Key Expertise:</h6>
                        <ul class="list-unstyled tech-list">
                            <li><span class="tech-tag"><i class="fab fa-dev"></i> Flutter</span></li>
                            <li><span class="tech-tag"><i class="fab fa-dev"></i> Dart</span></li>
                            <li><span class="tech-tag"><i class="fas fa-database"></i> Firebase Integration</span></li>
                            <li><span class="tech-tag"><i class="fab fa-react"></i> React Native (Basic)</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card glass-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h4 class="service-title">Robust Backend Solutions</h4>
                    <p class="service-description">
                        I build **scalable and secure server-side applications** that power complex web and mobile platforms. My focus is on creating efficient APIs, managing databases, and ensuring the stability and performance of your application's core.
                    </p>
                    <div class="service-details mt-4">
                        <h6 class="text-secondary">Key Expertise:</h6>
                        <ul class="list-unstyled tech-list">
                            <li><span class="tech-tag"><i class="fab fa-node-js"></i> Node.js & Express</span></li>
                            <li><span class="tech-tag"><i class="fas fa-database"></i> MongoDB</span></li>
                            <li><span class="tech-tag"><i class="fas fa-database"></i> PostgreSQL & MySQL</span></li>
                            <li><span class="tech-tag"><i class="fas fa-cloud"></i> RESTful APIs</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card glass-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4 class="service-title">Dynamic Web Development</h4>
                    <p class="service-description">
                        I develop **modern, responsive web applications** that are both visually appealing and highly functional. From front-end user interfaces to robust back-end systems, I deliver comprehensive web solutions tailored to your business goals.
                    </p>
                    <div class="service-details mt-4">
                        <h6 class="text-secondary">Key Expertise:</h6>
                        <ul class="list-unstyled tech-list">
                            <li><span class="tech-tag"><i class="fab fa-laravel"></i> Laravel (PHP)</span></li>
                            <li><span class="tech-tag"><i class="fas fa-code"></i> CodeIgniter 3 & 4</span></li>
                            <li><span class="tech-tag"><i class="fab fa-js-square"></i> JavaScript & jQuery</span></li>
                            <li><span class="tech-tag"><i class="fab fa-bootstrap"></i> Bootstrap & Responsive Design</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card glass-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h4 class="service-title">Database Design & Optimization</h4>
                    <p class="service-description">
                        I specialize in designing **efficient and well-structured databases** to ensure optimal performance and data integrity for your applications. This includes schema design, query optimization, and data migration.
                    </p>
                    <div class="service-details mt-4">
                        <h6 class="text-secondary">Key Expertise:</h6>
                        <ul class="list-unstyled tech-list">
                            <li><span class="tech-tag"><i class="fas fa-server"></i> SQL (PostgreSQL, MySQL)</span></li>
                            <li><span class="tech-tag"><i class="fas fa-leaf"></i> NoSQL (MongoDB)</span></li>
                            <li><span class="tech-tag"><i class="fas fa-cogs"></i> Schema Design</span></li>
                            <li><span class="tech-tag"><i class="fas fa-search-plus"></i> Query Optimization</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card glass-card h-100">
                    <div class="service-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h4 class="service-title">API Development & Integration</h4>
                    <p class="service-description">
                        I build and integrate **robust RESTful APIs** that enable seamless communication between different applications and services. This ensures your platforms can interact efficiently and extend their functionality.
                    </p>
                    <div class="service-details mt-4">
                        <h6 class="text-secondary">Key Expertise:</h6>
                        <ul class="list-unstyled tech-list">
                            <li><span class="tech-tag"><i class="fas fa-code-branch"></i> RESTful API Design</span></li>
                            <li><span class="tech-tag"><i class="fab fa-node-js"></i> Node.js APIs</span></li>
                            <li><span class="tech-tag"><i class="fab fa-laravel"></i> Laravel APIs</span></li>
                            <li><span class="tech-tag"><i class="fas fa-hands-helping"></i> Third-Party Integrations</span></li>
                        </ul>
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
                        <img src="https://eperolehan.dbkl.gov.my/assets-metronic/media/logos/open-sidebar-logo_headerhome.png" alt="eperolehan DBKL" class="img-fluid" style="object-fit: contain; width: 100%; height: 300px;">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://play.google.com/store/apps/details?id=com.example.eperolehan" class="project-link" title="View on Google Play" target="_blank" rel="noopener">
                                    <i class="fab fa-android"></i>
                                </a>
                                <a href="https://apps.apple.com/app/id1234567890" class="project-link" title="View on App Store" target="_blank" rel="noopener">
                                    <i class="fab fa-apple"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Mobile Application</div>
                        <h4 class="project-title">ePerolehan DBKL</h4>
                        <p class="project-description" style="height: 72px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; display: box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical; box-orient: vertical;">
                            ePerolehan for Dewan Bandaraya Kuala Lumpur (DBKL): A digital platform that streamlines and automates the entire tender and procurement process, enabling efficient, paperless management of all purchasing activities.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">Flutter</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Postman</span>
                            <span class="tech-tag">RESTful API</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-lg-6">
                <div class="project-card glass-card">
                    <div class="project-image">
                        <img src="https://cit.securiforce.net/app-assets/logo/9a6cefbceff3cf135b0b90cc9058c0c1.png" alt="CIT receipt" class="img-fluid" style="object-fit: contain; width: 100%; height: 300px;">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://cit.securiforce.net/" class="project-link" title="Visit CIT System" target="_blank" rel="noopener">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Web &amp; Mobile Application</div>
                        <h4 class="project-title">CIT - Full Manage Receipt Book</h4>
                        <p class="project-description" style="height: 72px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;">
                            A web application for security service providers to manage Cash-In-Transit (CIT) orders. The system digitizes the entire receipt book process, enabling every transaction and receipt page to be tracked and audited efficiently for compliance and transparency.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Kotlin</span>
                            <span class="tech-tag">CodeIgniter 3</span>
                            <span class="tech-tag">PostgreSQL</span>
                            <span class="tech-tag">Postman</span>
                            <span class="tech-tag">RESTful API</span>
                            <span class="tech-tag">Docker</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-lg-6">
                <div class="project-card glass-card">
                    <div class="project-image">
                        <img src="https://cit.securiforce.net/app-assets/logo/9a6cefbceff3cf135b0b90cc9058c0c1.png" alt="wetrack system" class="img-fluid" style="object-fit: contain; width: 100%; height: 300px;">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://wetrack.securiforce.net/" class="project-link" title="Visit CIT System" target="_blank" rel="noopener">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Web &amp; Mobile Application</div>
                        <h4 class="project-title">Wetrack System</h4>
                        <p class="project-description" style="height: 72px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;">
                            As a security provider for cash-in-transit operations between cash centers and ATM branches, this system eliminates the need for technicians to call the command center for secure lock codes at each security layer. Instead, technicians securely retrieve codes directly from the mobile app using a secure flow—each user is assigned a unique public key to obtain codes. Every security layer is protected, and all actions are fully audited for compliance and transparency.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">CodeIgniter 3</span>
                            <span class="tech-tag">PostgreSQL</span>
                            <span class="tech-tag">Kotlin</span>
                            <span class="tech-tag">Postman</span>
                            <span class="tech-tag">RESTful API</span>
                            <span class="tech-tag">Docker</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="col-lg-6">
                <div class="project-card glass-card">
                    <div class="project-image">
                        <img src="https://cit.securiforce.net/app-assets/logo/9a6cefbceff3cf135b0b90cc9058c0c1.png" alt="Fasttrack" class="img-fluid" style="object-fit: contain; width: 100%; height: 300px;">
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
                        <h4 class="project-title">Fasttrack System</h4>
                        <p class="project-description" style="height: 72px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;">
                            A client-facing web application that enables users to conveniently order a variety of services, such as cash-in-transit, through a streamlined and user-friendly interface.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">CodeIgniter 4</span>
                            <span class="tech-tag">PostgreSQL</span>
                            <span class="tech-tag">Postman</span>
                            <span class="tech-tag">RESTful API</span>
                            <span class="tech-tag">Docker</span>
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
            <p class="section-subtitle">Ready to bring your ideas to life? Send me a message!</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                {{-- Add the form here --}}
                <form action="{{ route('contact.send') }}" method="POST" class="contact-form glass-card p-4 p-md-5">
                    @csrf {{-- Laravel's CSRF token for security --}}

                    <h4 class="text-center mb-4 section-subtitle">Send Me a Message</h4>

                    <div class="mb-3">
                        <label for="title" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="title" name="title" required placeholder="Project Inquiry, Collaboration, etc.">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number (Optional)</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+123 456 7890">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Message</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required placeholder="Tell me about your project or inquiry..."></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn-modern btn-primary-modern btn-lg">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>

                {{-- Retain social links as an alternative/additional contact method --}}
                <div class="text-center mt-5">
                    <p class="text-secondary mb-3">Or connect with me on social media:</p>
                    <div class="social-links">
                        <a href="https://my.linkedin.com/in/hafizbahtiar" class="social-link" target="_blank" rel="noopener" aria-label="LinkedIn">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/hafizbahtiar" class="social-link" target="_blank" rel="noopener" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        {{-- Add more social links if needed --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                <p class="footer-text mb-0">
                    &copy; {{ date('Y') }} Hafiz. All rights reserved. Crafted with <i class="fas fa-heart text-danger"></i>
                </p>
            </div>
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <ul class="footer-nav list-unstyled d-flex justify-content-center gap-4 mb-0">
                    <li><a href="#hero" class="footer-link">Home</a></li>
                    <li><a href="#about" class="footer-link">About</a></li>
                    <li><a href="#services" class="footer-link">Services</a></li>
                    <li><a href="#projects" class="footer-link">Projects</a></li>
                    <li><a href="#contact" class="footer-link">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 text-center text-md-end">
                <div class="social-links d-inline-flex gap-3">
                    <a href="https://github.com/hafizbahtiar" class="social-link" target="_blank" rel="noopener" aria-label="GitHub Profile"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/hafizbahtiar" class="social-link" target="_blank" rel="noopener" aria-label="LinkedIn Profile"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection