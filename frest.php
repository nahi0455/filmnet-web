<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Filmnet - Premium Movie Streaming</title>
    <link rel="stylesheet" href="assets/css/modern-style.css">
    <style>
        /* Landing Page Specific Styles */
        .landing-hero {
            background: linear-gradient(135deg, rgba(229, 9, 20, 0.8), rgba(20, 20, 20, 0.9)), 
                        url('tampler/baground/3babc65de5d5b9f42b211ee1112197e0.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            max-width: 800px;
            padding: 2rem;
            z-index: 2;
        }
        
        .hero-title {
            font-size: 4rem;
            font-weight: bold;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.7);
            animation: fadeInUp 1s ease-out;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--text-secondary);
            margin-bottom: 3rem;
            animation: fadeInUp 1s ease-out 0.3s both;
        }
        
        .cta-buttons {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease-out 0.6s both;
        }
        
        .cta-btn {
            padding: 1.2rem 2.5rem;
            font-size: 1.2rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }
        
        .cta-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .cta-btn:hover::before {
            left: 100%;
        }
        
        .cta-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--hover-color));
            color: white;
        }
        
        .cta-primary:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 35px rgba(229, 9, 20, 0.4);
        }
        
        .cta-secondary {
            background: rgba(255,255,255,0.1);
            color: white;
            border: 2px solid rgba(255,255,255,0.3);
            backdrop-filter: blur(10px);
        }
        
        .cta-secondary:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 35px rgba(255,255,255,0.2);
        }
        
        .cta-admin {
            background: linear-gradient(135deg, var(--accent-color), #f39c12);
            color: var(--darker-bg);
        }
        
        .cta-admin:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 35px rgba(245, 197, 24, 0.4);
        }
        
        /* Floating particles animation */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .particle {
            position: absolute;
            background: rgba(229, 9, 20, 0.3);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .particle:nth-child(1) { width: 10px; height: 10px; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 15px; height: 15px; left: 20%; animation-delay: 1s; }
        .particle:nth-child(3) { width: 8px; height: 8px; left: 30%; animation-delay: 2s; }
        .particle:nth-child(4) { width: 12px; height: 12px; left: 40%; animation-delay: 3s; }
        .particle:nth-child(5) { width: 18px; height: 18px; left: 50%; animation-delay: 4s; }
        .particle:nth-child(6) { width: 6px; height: 6px; left: 60%; animation-delay: 5s; }
        .particle:nth-child(7) { width: 14px; height: 14px; left: 70%; animation-delay: 0.5s; }
        .particle:nth-child(8) { width: 9px; height: 9px; left: 80%; animation-delay: 1.5s; }
        .particle:nth-child(9) { width: 16px; height: 16px; left: 90%; animation-delay: 2.5s; }
        
        @keyframes float {
            0%, 100% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }
        
        /* About Section */
        .about-section {
            padding: 6rem 0;
            background: var(--dark-bg);
        }
        
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .about-content {
            animation: slideInLeft 1s ease-out;
        }
        
        .about-images {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            animation: slideInRight 1s ease-out;
        }
        
        .about-card {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            border-left: 4px solid var(--primary-color);
            transition: var(--transition);
            animation: fadeInUp 1s ease-out;
        }
        
        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(229, 9, 20, 0.2);
        }
        
        .about-card h3 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .about-card p {
            color: var(--text-secondary);
            line-height: 1.6;
        }
        
        .image-card {
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
            transition: var(--transition);
            position: relative;
        }
        
        .image-card:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 15px 35px rgba(229, 9, 20, 0.3);
        }
        
        .image-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .image-card:hover img {
            transform: scale(1.1);
        }
        
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(229, 9, 20, 0.8), rgba(245, 197, 24, 0.8));
            opacity: 0;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        
        .image-card:hover .image-overlay {
            opacity: 1;
        }
        
        /* Features Section */
        .features-section {
            padding: 6rem 0;
            background: var(--darker-bg);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .feature-card {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }
        
        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(229, 9, 20, 0.3);
        }
        
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: block;
        }
        
        .feature-card h3 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .feature-card p {
            color: var(--text-secondary);
            line-height: 1.6;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .about-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            
            .about-images {
                grid-template-columns: 1fr;
            }
            
            .cta-btn {
                width: 100%;
                max-width: 300px;
            }
        }
        
        /* Scroll animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-out;
        }
        
        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="landing-hero">
        <div class="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        
        <div class="hero-content">
            <h1 class="hero-title">Welcome to Filmnet</h1>
            <p class="hero-subtitle">Premium Ethiopian Movie Streaming Experience</p>
            
            <div class="cta-buttons">
                <a href="filmnet.php" class="cta-btn cta-primary">
                    🎬 Register Now
                </a>
                <a href="login_page_modern.php" class="cta-btn cta-secondary">
                    🔑 User Login
                </a>
                <a href="alllogin_page.php" class="cta-btn cta-admin">
                    👑 Admin Login
                </a>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="about-section">
        <div class="about-grid">
            <div class="about-content animate-on-scroll">
                <div class="about-card">
                    <h3>🎯 Background</h3>
                    <p>The Movie Management System is designed to address the growing need for an organized and efficient way to manage movie databases. With the increasing number of movies being produced each year, there is a need for a system that can handle large volumes of data while providing a seamless user experience.</p>
                </div>
                
                <div class="about-card">
                    <h3>🚀 Objective</h3>
                    <p>The primary objective of this project is to develop a Movie Management System that allows users to efficiently manage movie data, including adding, updating, deleting, and searching for movies.</p>
                </div>
                
                <div class="about-card">
                    <h3>🎬 Scope</h3>
                    <p>The system will be designed for use by movie database administrators and enthusiasts. It will include features such as user authentication, movie search, and review management.</p>
                </div>
                
                <div class="about-card">
                    <h3>⭐ Significance</h3>
                    <p>This project will provide a practical solution for managing movie databases, improving efficiency, and enhancing user experience.</p>
                </div>
            </div>
            
            <div class="about-images animate-on-scroll">
                <div class="image-card">
                    <img src="tampler/frest page/57bb3a35b6ae9ab7988f23a3989f9b14.jpg" alt="Movie Collection">
                    <div class="image-overlay">Premium Movies</div>
                </div>
                <div class="image-card">
                    <img src="tampler/frest page/c754532c55c7f25333800ae78f5f1905.jpg" alt="Streaming Quality">
                    <div class="image-overlay">HD Streaming</div>
                </div>
                <div class="image-card">
                    <img src="tampler/frest page/320408d161ef89e5173c6dcec53655ba.jpg" alt="User Experience">
                    <div class="image-overlay">Great Experience</div>
                </div>
                <div class="image-card">
                    <img src="tampler/frest page/f13fb69c060e39aceb316cca1ef83260.jpg" alt="Entertainment">
                    <div class="image-overlay">Entertainment</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Why Choose Filmnet?</h2>
            <div class="features-grid">
                <div class="feature-card animate-on-scroll">
                    <span class="feature-icon">🎭</span>
                    <h3>Diverse Content</h3>
                    <p>Access to a wide variety of movies from different genres, including local Ethiopian content and international blockbusters.</p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <span class="feature-icon">📱</span>
                    <h3>Multi-Device Access</h3>
                    <p>Watch your favorite movies on any device - smartphone, tablet, laptop, or smart TV with seamless synchronization.</p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <span class="feature-icon">🔍</span>
                    <h3>Smart Search</h3>
                    <p>Find movies quickly with our advanced search and recommendation system based on your viewing preferences.</p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <span class="feature-icon">👥</span>
                    <h3>User Management</h3>
                    <p>Create profiles, manage watchlists, and get personalized recommendations for the best viewing experience.</p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <span class="feature-icon">🌟</span>
                    <h3>Premium Quality</h3>
                    <p>Enjoy high-definition streaming with crystal clear audio and video quality for the ultimate movie experience.</p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <span class="feature-icon">🔒</span>
                    <h3>Secure Platform</h3>
                    <p>Your data and viewing history are protected with enterprise-level security and privacy measures.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Enhanced Footer -->
    <footer class="footer-enhanced">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section-enhanced animate-fadeInUp">
                    <h3>About Filmnet</h3>
                    <p>Filmnet is Ethiopia's premier movie streaming platform, offering the best in local and international cinema with unmatched quality and user experience.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">📘</a>
                        <a href="#" class="social-link">🐦</a>
                        <a href="#" class="social-link">📷</a>
                        <a href="#" class="social-link">📺</a>
                    </div>
                </div>
                
                <div class="footer-section-enhanced animate-fadeInUp">
                    <h3>Quick Links</h3>
                    <p><a href="filmnet.php">Register</a></p>
                    <p><a href="login_page_modern.php">User Login</a></p>
                    <p><a href="alllogin_page.php">Admin Login</a></p>
                    <p><a href="home_modern.php">Browse Movies</a></p>
                </div>
                
                <div class="footer-section-enhanced animate-fadeInUp">
                    <h3>Newsletter</h3>
                    <p>Subscribe to get updates on new movies and exclusive content.</p>
                    <form class="newsletter-form">
                        <input type="email" class="newsletter-input" placeholder="Enter your email">
                        <button type="submit" class="newsletter-btn">Subscribe</button>
                    </form>
                </div>
                
                <div class="footer-section-enhanced animate-fadeInUp">
                    <h3>Contact Info</h3>
                    <p>📍 Bule Hora University<br>Hagere Mariam, Ethiopia</p>
                    <p>📞 Phone: (+251) 942435347</p>
                    <p>✉️ Email: nationly623@gmail.com</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>© 2024 Filmnet. All rights reserved. | Premium Ethiopian Movie Streaming Platform</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                    }
                });
            }, observerOptions);
            
            // Observe all elements with animate-on-scroll class
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
            
            // Add parallax effect to hero background
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.landing-hero');
                if (hero) {
                    hero.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });
            
            // Add hover effects to CTA buttons
            document.querySelectorAll('.cta-btn').forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px) scale(1.05)';
                });
                
                btn.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
</body>
</html>

