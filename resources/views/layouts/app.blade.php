<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Landing Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* Smooth scrolling for anchor links */
        html {
            scroll-behavior: smooth;
        }
        /* Extra padding for fixed navbar */
        body {
            padding-top: 56px;
        }
    </style>
</head>
<body>

    <!-- 1. Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-rocket-takeoff-fill me-2 text-primary"></i>LaunchPad
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary btn-sm rounded-pill px-3 mt-2 mt-lg-0" href="#pricing">Get Started</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. Hero Section -->
    <header class="bg-light py-5 border-bottom">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-dark mb-3">Build something amazing with Bootstrap</h1>
                    <p class="lead text-muted mb-4">A clean, fully responsive, and modern landing page template to jumpstart your next SaaS application or digital product.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-start">
                        <a href="#features" class="btn btn-primary btn-lg px-4 me-sm-3 rounded-pill">Explore Features</a>
                        <a href="#contact" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Placeholder vector/image box -->
                    <div class="bg-secondary bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center ratio ratio-16x9">
                        <span class="text-secondary fw-semibold"><i class="bi bi-image display-1"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. Features Section -->
    <section id="features" class="py-5">
        <div class="container py-5">
            <div class="text-center max-width-md mx-auto mb-5">
                <h2 class="fw-bold">Why Choose Us?</h2>
                <p class="text-muted">Everything you need to ship your product efficiently and beautifully.</p>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded-4 h-100">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 3rem; height: 3rem;">
                            <i class="bi bi-lightning-charge fs-4"></i>
                        </div>
                        <h4 class="fw-bold">Lightning Fast</h4>
                        <p class="text-muted mb-0">Optimized for rapid load speeds and flawless fluid animations out of the box.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded-4 h-100">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 3rem; height: 3rem;">
                            <i class="bi bi-shield-check fs-4"></i>
                        </div>
                        <h4 class="fw-bold">Secure by Default</h4>
                        <p class="text-muted mb-0">Built on modern development frameworks ensuring top-tier safety standards.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded-4 h-100">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 3rem; height: 3rem;">
                            <i class="bi bi-palette fs-4"></i>
                        </div>
                        <h4 class="fw-bold">Easily Customizable</h4>
                        <p class="text-muted mb-0">Modify utilities, global CSS colors, or structural variables with absolute ease.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Showcase Split Section -->
    <section class="py-5 bg-light border-top border-bottom">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2">
                    <h2 class="fw-bold mb-3">Keep track of your growth analytics seamlessly</h2>
                    <p class="text-muted">Our intuitive dashboards take the guesswork out of conversion management. Monitor traffic patterns, retention dynamics, and dropoffs live as they happen.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2 text-muted"><i class="bi bi-check2-circle text-primary me-2"></i> Real-time activity feeds</li>
                        <li class="mb-2 text-muted"><i class="bi bi-check2-circle text-primary me-2"></i> Custom threshold alert triggers</li>
                        <li class="text-muted"><i class="bi bi-check2-circle text-primary me-2"></i> Automated weekly email digests</li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="bg-secondary bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center ratio ratio-4x3">
                        <span class="text-secondary fw-semibold"><i class="bi bi-graph-up-arrow display-1"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Pricing Section -->
    <section id="pricing" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Simple, transparent pricing</h2>
                <p class="text-muted">No hidden contracts. Upgrade or cancel your tier at any point.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Free Plan -->
                <div class="col-md-5 col-lg-4">
                    <div class="card h-100 shadow-sm rounded-4 border-0 bg-light p-3">
                        <div class="card-body">
                            <h5 class="card-title text-muted fw-bold text-uppercase small mb-3">Starter</h5>
                            <h2 class="card-price fw-bold mb-4">$0 <span class="fs-6 fw-normal text-muted">/ mo</span></h2>
                            <ul class="list-unstyled mb-5 text-muted">
                                <li class="mb-3"><i class="bi bi-check text-primary me-2"></i> 1 User Account</li>
                                <li class="mb-3"><i class="bi bi-check text-primary me-2"></i> Core Analytics Engine</li>
                                <li class="mb-3 text-decoration-line-through text-opacity-50"><i class="bi bi-x me-2"></i> Custom Export Report Engine</li>
                                <li class="text-decoration-line-through text-opacity-50"><i class="bi bi-x me-2"></i> 24/7 Phone Support</li>
                            </ul>
                            <div class="d-grid"><a href="#" class="btn btn-outline-primary rounded-pill">Choose Free</a></div>
                        </div>
                    </div>
                </div>
                <!-- Premium Plan -->
                <div class="col-md-5 col-lg-4">
                    <div class="card h-100 shadow border-primary rounded-4 border-2 p-3 position-relative">
                        <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-primary px-3 py-2">MOST POPULAR</span>
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold text-uppercase small mb-3">Pro</h5>
                            <h2 class="card-price fw-bold mb-4">$29 <span class="fs-6 fw-normal text-muted">/ mo</span></h2>
                            <ul class="list-unstyled mb-5 text-muted">
                                <li class="mb-3"><i class="bi bi-check text-primary me-2"></i> 5 User Accounts</li>
                                <li class="mb-3"><i class="bi bi-check text-primary me-2"></i> Full Suite Analytics</li>
                                <li class="mb-3"><i class="bi bi-check text-primary me-2"></i> Custom Export Report Engine</li>
                                <li class="text-muted"><i class="bi bi-check text-primary me-2"></i> Dedicated Email & Chat Support</li>
                            </ul>
                            <div class="d-grid"><a href="#" class="btn btn-primary rounded-pill">Get Pro Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Contact Section -->
    <section id="contact" class="py-5 bg-light border-top">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">Get in Touch</h2>
                        <p class="text-muted">Have a few technical inquiries? Drop us a line below.</p>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="nameInput" class="form-label small fw-semibold">Name</label>
                            <input type="text" class="form-control rounded-3" id="nameInput" placeholder="Jane Doe" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label small fw-semibold">Email address</label>
                            <input type="email" class="form-control rounded-3" id="emailInput" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-4">
                            <label for="messageTextarea" class="form-label small fw-semibold">Message</label>
                            <textarea class="form-control rounded-3" id="messageTextarea" rows="4" placeholder="How can we help you?" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill fs-6">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Footer -->
    <footer class="bg-dark text-white-50 py-4 border-top border-secondary">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} LaunchPad. All rights reserved.</small>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle with Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>