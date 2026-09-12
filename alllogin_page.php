<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Filmnet</title>
    <link rel="stylesheet" href="assets/css/modern-style.css">
    <style>
        /* Admin Login Specific Styles */
        .admin-login-hero {
            background: linear-gradient(135deg, rgba(245, 197, 24, 0.9), rgba(229, 9, 20, 0.8)), 
                        url('tampler/baground/3babc65de5d5b9f42b211ee1112197e0.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .admin-login-container {
            background: rgba(15, 15, 15, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 3rem;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.6);
            border: 2px solid rgba(245, 197, 24, 0.3);
            max-width: 450px;
            width: 100%;
            margin: 0 1rem;
            position: relative;
        }
        
        .admin-login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--accent-color), var(--primary-color));
            border-radius: 25px 25px 0 0;
        }
        
        .admin-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }
        
        .admin-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--accent-color), #f39c12);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
            box-shadow: 0 10px 30px rgba(245, 197, 24, 0.3);
            animation: pulse 2s infinite;
        }
        
        .admin-title {
            font-size: 2.2rem;
            font-weight: bold;
            color: var(--accent-color);
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .admin-subtitle {
            color: var(--text-secondary);
            font-size: 1rem;
        }
        
        .admin-form-group {
            margin-bottom: 2rem;
            position: relative;
        }
        
        .admin-form-label {
            display: block;
            margin-bottom: 0.75rem;
            color: var(--accent-color);
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .admin-form-input {
            width: 100%;
            padding: 1.2rem 1.5rem;
            border: 2px solid rgba(245, 197, 24, 0.3);
            border-radius: 15px;
            background: rgba(47, 47, 47, 0.8);
            color: var(--text-primary);
            font-size: 1.1rem;
            transition: var(--transition);
            backdrop-filter: blur(10px);
        }
        
        .admin-form-input:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 20px rgba(245, 197, 24, 0.3);
            transform: scale(1.02);
        }
        
        .admin-form-input::placeholder {
            color: var(--text-secondary);
        }
        
        .admin-btn {
            width: 100%;
            padding: 1.2rem;
            font-size: 1.2rem;
            font-weight: 600;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: var(--transition);
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }
        
        .admin-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .admin-btn:hover::before {
            left: 100%;
        }
        
        .admin-btn-primary {
            background: linear-gradient(135deg, var(--accent-color), #f39c12);
            color: var(--darker-bg);
            margin-bottom: 1rem;
        }
        
        .admin-btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(245, 197, 24, 0.4);
        }
        
        .admin-btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-primary);
            border: 2px solid rgba(245, 197, 24, 0.3);
        }
        
        .admin-btn-secondary:hover {
            background: rgba(245, 197, 24, 0.2);
            border-color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .back-btn {
            position: absolute;
            top: 2rem;
            left: 2rem;
            background: rgba(15, 15, 15, 0.9);
            color: var(--accent-color);
            padding: 0.75rem 1.5rem;
            border-radius: 15px;
            text-decoration: none;
            transition: var(--transition);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(245, 197, 24, 0.3);
            font-weight: 600;
        }
        
        .back-btn:hover {
            background: var(--accent-color);
            color: var(--darker-bg);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(245, 197, 24, 0.3);
        }
        
        .security-notice {
            background: rgba(229, 9, 20, 0.1);
            border: 1px solid rgba(229, 9, 20, 0.3);
            border-radius: 10px;
            padding: 1rem;
            margin-top: 2rem;
            text-align: center;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        .security-notice .icon {
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-right: 0.5rem;
        }
        
        /* Floating admin badges */
        .admin-badges {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }
        
        .admin-badge {
            position: absolute;
            background: rgba(245, 197, 24, 0.2);
            border-radius: 50%;
            animation: floatAdmin 8s ease-in-out infinite;
        }
        
        .admin-badge:nth-child(1) { width: 20px; height: 20px; left: 10%; animation-delay: 0s; }
        .admin-badge:nth-child(2) { width: 15px; height: 15px; left: 20%; animation-delay: 2s; }
        .admin-badge:nth-child(3) { width: 25px; height: 25px; left: 80%; animation-delay: 4s; }
        .admin-badge:nth-child(4) { width: 18px; height: 18px; left: 90%; animation-delay: 6s; }
        
        @keyframes floatAdmin {
            0%, 100% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }
        
        @media (max-width: 768px) {
            .admin-login-container {
                padding: 2rem;
                margin: 0 0.5rem;
            }
            
            .admin-title {
                font-size: 1.8rem;
            }
            
            .back-btn {
                position: static;
                display: inline-block;
                margin-bottom: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="admin-login-hero">
        <div class="admin-badges">
            <div class="admin-badge"></div>
            <div class="admin-badge"></div>
            <div class="admin-badge"></div>
            <div class="admin-badge"></div>
        </div>
        
        <a href="frest.php" class="back-btn animate-slideInLeft">← Back to Home</a>
        
        <div class="admin-login-container animate-fadeInUp">
            <div class="admin-header">
                <div class="admin-icon">👑</div>
                <h1 class="admin-title">Admin Portal</h1>
                <p class="admin-subtitle">Secure Administrator Access</p>
            </div>
            
            <form action="alllog_code.php" id="adminLoginForm" name="adminLoginForm" method="post" autocomplete="off" class="animate-slideInRight">
                <div class="admin-form-group">
                    <label for="textfield" class="admin-form-label">👤 Username</label>
                    <input type="text" name="textfield" id="textfield" class="admin-form-input" placeholder="Enter admin username" required>
                </div>
                
                <div class="admin-form-group">
                    <label for="password" class="admin-form-label">🔐 Password</label>
                    <input type="password" name="password" id="password" class="admin-form-input" placeholder="Enter admin password" required>
                </div>
                
                <button type="submit" name="submit" class="admin-btn admin-btn-primary">
                    🚀 Access Admin Panel
                </button>
                <button type="reset" name="reset" class="admin-btn admin-btn-secondary">
                    🔄 Clear Form
                </button>
                
                <div class="security-notice">
                    <span class="icon">🛡️</span>
                    This is a secure admin area. All access attempts are logged and monitored.
                </div>
            </form>
        </div>
    </div>

    <!-- Enhanced Footer -->
    <footer class="footer-enhanced">
        <div class="container">
            <div class="footer-bottom text-center">
                <p>© 2024 Filmnet. All rights reserved. | Admin Portal - Secure Access</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('adminLoginForm');
            const inputs = document.querySelectorAll('.admin-form-input');
            
            // Add focus effects
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'scale(1.02)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'scale(1)';
                });
            });
            
            // Form validation
            form.addEventListener('submit', function(e) {
                const username = document.getElementById('textfield').value.trim();
                const password = document.getElementById('password').value;
                
                if (!username || !password) {
                    e.preventDefault();
                    alert('Please fill in all fields');
                    return;
                }
                
                if (username.length < 3) {
                    e.preventDefault();
                    alert('Username must be at least 3 characters long');
                    return;
                }
                
                if (password.length < 6) {
                    e.preventDefault();
                    alert('Password must be at least 6 characters long');
                    return;
                }
            });
            
            // Add typing effect to title
            const title = document.querySelector('.admin-title');
            const text = title.textContent;
            title.textContent = '';
            let i = 0;
            
            function typeWriter() {
                if (i < text.length) {
                    title.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 100);
                }
            }
            
            setTimeout(typeWriter, 500);
        });
    </script>
</body>
</html>
