<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicken Run - Filmnet</title>
    <link rel="stylesheet" href="assets/css/modern-style.css">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <a href="home_modern.php" class="logo animate-pulse">Filmnet</a>
            <nav class="nav-menu">
                <a href="home_modern.php">Home</a>
                <a href="movies_modern.php">Movies</a>
                <a href="geners.php">Genres</a>
                <a href="search.php">Search</a>
                <a href="chose.php">Choose</a>
            </nav>
            <div class="search-container">
                <a href="filmnet.php" class="btn btn-secondary">Logout</a>
            </div>
        </div>
    </header>

    <!-- Movie Detail Container -->
    <div class="movie-detail-container animate-fadeInUp">
        <div class="movie-hero">
            <div class="animate-slideInLeft">
                <img src="https://via.placeholder.com/400x600/f5c518/000000?text=Chicken+Run" alt="Chicken Run Poster" class="movie-poster-large">
            </div>
            <div class="movie-details animate-slideInRight">
                <h1 class="movie-title-large">Chicken Run</h1>
                <div class="movie-meta">
                    <div class="meta-item">
                        <span class="meta-label">Genre</span>
                        <span class="meta-value">Animation/Comedy</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">Year</span>
                        <span class="meta-value">2024</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">Country</span>
                        <span class="meta-value">United Kingdom</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">Rating</span>
                        <div class="rating-badge">
                            <span class="rating-star">⭐</span>
                            <span>8.6/10</span>
                        </div>
                    </div>
                </div>
                <p class="text-secondary mb-2">
                    Join Ginger and her fellow chickens in their daring escape from Tweedy's Farm. This animated adventure 
                    combines humor, heart, and spectacular animation in a story that will entertain the whole family.
                </p>
            </div>
        </div>

        <!-- Video Section -->
        <div class="video-section">
            <h2 class="section-title">Watch Now</h2>
            <div class="video-wrapper animate-glow">
                <iframe src="https://www.youtube.com/embed/0DFLDslcJtE?si=fi6B-yjMFIRX3jgr" 
                        title="Chicken Run Movie" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    <!-- Enhanced Footer -->
    <footer class="footer-enhanced">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section-enhanced animate-fadeInUp">
                    <h3>About Filmnet</h3>
                    <p>Filmnet is a premium movie streaming service for Ethiopian audiences, offering dubbed foreign movies and local content with the highest quality experience.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">📘</a>
                        <a href="#" class="social-link">🐦</a>
                        <a href="#" class="social-link">📷</a>
                        <a href="#" class="social-link">📺</a>
                    </div>
                </div>
                
                <div class="footer-section-enhanced animate-fadeInUp">
                    <h3>Navigation</h3>
                    <p><a href="home_modern.php">Home</a></p>
                    <p><a href="movies_modern.php">Movies</a></p>
                    <p><a href="geners.php">Genres</a></p>
                    <p><a href="search.php">Search</a></p>
                    <p><a href="contact us.php">Contact Us</a></p>
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
                    <h3>Get in Touch</h3>
                    <p>📍 Bule Hora University<br>Hagere Mariam, Ethiopia</p>
                    <p>📞 Phone: (+251) 942435347</p>
                    <p>✉️ Email: nationly623@gmail.com</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>© 2024 Filmnet. All rights reserved. | Premium Ethiopian Movie Streaming</p>
            </div>
        </div>
    </footer>

    <script>
        // Add smooth scrolling and animation triggers
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Add loading animation to video
            const iframe = document.querySelector('iframe');
            if (iframe) {
                iframe.addEventListener('load', function() {
                    this.style.opacity = '1';
                });
            }
        });
    </script>
</body>
</html>
