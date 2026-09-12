<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies - Filmnet</title>
    <link rel="stylesheet" href="assets/css/modern-style.css">
    <link rel="icon" type="image/x-icon" href="tampler/favicon.ico">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav-container">
            <a href="home_modern.php" class="logo">🎬 Filmnet</a>
            
            <ul class="nav-menu">
                <li><a href="home_modern.php">Home</a></li>
                <li><a href="movies_modern.php" style="color: var(--primary-color);">Movies</a></li>
                <li><a href="geners.php">Genres</a></li>
                <li><a href="chose.php">Browse</a></li>
            </ul>
            
            <div class="search-container">
                <form method="post" action="search.php" class="flex gap-1">
                    <input type="text" name="search_box" class="search-input" placeholder="Search movies...">
                    <button type="submit" name="search" class="search-btn">Search</button>
                </form>
            </div>
            
            <div class="nav-menu">
                <a href="login_page_modern.php" class="btn btn-primary">Login</a>
            </div>
        </nav>
    </header>

    <!-- Page Header -->
    <section class="container" style="margin-top: 2rem;">
        <h1 class="section-title">🎥 Movie Collection</h1>
        <p class="text-center" style="color: var(--text-secondary); font-size: 1.1rem; margin-bottom: 3rem;">
            Explore our extensive collection of movies and trailers
        </p>
    </section>

    <!-- Featured Trailers -->
    <section class="container">
        <h2 class="section-title">🌟 Featured Trailers</h2>
        <div class="video-grid">
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/1LRKWIOJHDs?si=jVU-Qmu4MJ0fX9f2" 
                    title="Featured Movie Trailer 1" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/jWuEHJCYajE?si=UT5otubjINGgEbC4" 
                    title="Featured Movie Trailer 2" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/7hjHxpkKx-g?si=2431EzSt-sHhP_Y3" 
                    title="Featured Movie Trailer 3" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <!-- Action Movies -->
    <section class="container">
        <h2 class="section-title">💥 Action Movies</h2>
        <div class="video-grid">
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/Bm_-1xPEbDM?si=mdcnyny5-XnDYfl0" 
                    title="Action Movie 1" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/UTAvGzCK6ok?si=Wwn3pi6ep4RhN3ZC" 
                    title="Action Movie 2" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <!-- Adventure Movies -->
    <section class="container">
        <h2 class="section-title">🗺️ Adventure Movies</h2>
        <div class="video-grid">
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/c6hQhfurQjg?si=zSFooK5woUUqRPna" 
                    title="Adventure Movie 1" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/slHauNbmDbk?si=4vGoBBo-LiIULNqI" 
                    title="Adventure Movie 2" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <!-- Comedy Movies -->
    <section class="container">
        <h2 class="section-title">😄 Comedy Movies</h2>
        <div class="video-grid">
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/svJf7szvibA?si=oArkEDVPPhOqUGsF" 
                    title="Comedy Movie 1" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/QAYFz3owVRk?si=8NJm0h2b6PrCgncv" 
                    title="Comedy Movie 2" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <!-- Sci-Fi Movies -->
    <section class="container">
        <h2 class="section-title">🚀 Sci-Fi Movies</h2>
        <div class="video-grid">
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/s0VruXmA__k?si=Eo2DiqwmlFGWux1q" 
                    title="Sci-Fi Movie 1" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/WwGYDA8RYZc?si=HioSCHfY7-yy6G0P" 
                    title="Sci-Fi Movie 2" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <!-- Thriller Movies -->
    <section class="container">
        <h2 class="section-title">🎭 Thriller Movies</h2>
        <div class="video-grid">
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/17qqQfV88s4?si=k0Fs8le2D-VlVHgw" 
                    title="Thriller Movie 1" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/17ShgMPlRks?si=3jBUaGL1DYIAccDQ" 
                    title="Thriller Movie 2" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Filmnet</h3>
                    <p>Filmnet is a movie streaming service for Ethiopian audiences where you can get dubbed foreign movies and enjoy the best entertainment experience.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Navigation</h3>
                    <p><a href="home_modern.php">Home</a></p>
                    <p><a href="movies_modern.php">Movies</a></p>
                    <p><a href="geners.php">Genres</a></p>
                    <p><a href="allcomment.php">Contact Us</a></p>
                </div>
                
                <div class="footer-section">
                    <h3>Newsletter</h3>
                    <p>Subscribe to get updates about new movies and features.</p>
                    <form class="mt-2">
                        <input type="email" class="form-input" placeholder="Enter your email" style="margin-bottom: 1rem;">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
                
                <div class="footer-section">
                    <h3>Get in Touch</h3>
                    <p><a href="https://www.bhu.edu.et/">Bule Hora University</a></p>
                    <p><a href="https://www.bing.com/maps">Bule Hora, Oromia Region, Ethiopia</a></p>
                    <p>Phone: <a href="tel:+251942435347">(+251) 942435347</a></p>
                    <p>Email: <a href="mailto:nationly623@gmail.com">nationly623@gmail.com</a></p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Filmnet Project. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Add loading animation for videos
        document.querySelectorAll('iframe').forEach(iframe => {
            iframe.addEventListener('load', function() {
                this.style.opacity = '1';
            });
        });

        // Smooth scroll to sections
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            });
        });
    </script>
</body>
</html>