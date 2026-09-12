<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Filmnet</title>
    <link rel="stylesheet" href="assets/css/modern-style.css">
    <style>
        /* Additional registration page specific styles */
        .register-hero {
            background: linear-gradient(135deg, rgba(229, 9, 20, 0.9), rgba(20, 20, 20, 0.9)), 
                        url('tampler/baground/3babc65de5d5b9f42b211ee1112197e0.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
        }
        
        .register-container {
            background: rgba(47, 47, 47, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(229, 9, 20, 0.3);
            max-width: 500px;
            width: 100%;
            margin: 0 1rem;
        }
        
        .register-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .register-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .register-subtitle {
            color: var(--text-secondary);
            font-size: 1.1rem;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .form-group-full {
            grid-column: 1 / -1;
        }
        
        .password-strength {
            margin-top: 0.5rem;
            font-size: 0.9rem;
        }
        
        .strength-weak { color: #ff4757; }
        .strength-medium { color: #ffa502; }
        .strength-strong { color: #2ed573; }
        
        .form-footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(229, 9, 20, 0.2);
        }
        
        .login-link {
            color: var(--text-secondary);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .login-link:hover {
            color: var(--primary-color);
        }
        
        .back-btn {
            position: absolute;
            top: 2rem;
            left: 2rem;
            background: rgba(47, 47, 47, 0.9);
            color: var(--text-primary);
            padding: 0.75rem 1.5rem;
            border-radius: var(--border-radius);
            text-decoration: none;
            transition: var(--transition);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(229, 9, 20, 0.3);
        }
        
        .back-btn:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }
        
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .register-container {
                padding: 2rem;
                margin: 0 0.5rem;
            }
            
            .register-title {
                font-size: 2rem;
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
    <div class="register-hero">
        <a href="frest.php" class="back-btn animate-slideInLeft">← Back</a>
        
        <div class="register-container animate-fadeInUp">
            <div class="register-header">
                <h1 class="register-title animate-pulse">Welcome to Filmnet</h1>
                <p class="register-subtitle">Create your account to start streaming</p>
            </div>
            
            <form action="reg_code.php" id="registerForm" name="registerForm" method="post" class="animate-slideInRight">
                <div class="form-row">
                    <div class="form-group">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-input" required>
                    </div>
                </div>
                
                <div class="form-group form-group-full">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-input" required>
                </div>
                
                <div class="form-group form-group-full">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-input" required>
                </div>
                
                <div class="form-group form-group-full">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-input" required>
                    <div id="passwordStrength" class="password-strength"></div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" name="submit" class="btn btn-primary w-full">
                        Create Account
                    </button>
                    <button type="reset" name="reset" class="btn btn-secondary w-full mt-1">
                        Reset Form
                    </button>
                </div>
                
                <div class="form-footer">
                    <p>Already have an account? <a href="login_page_modern.php" class="login-link">Sign in here</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Enhanced Footer -->
    <footer class="footer-enhanced">
        <div class="container">
            <div class="footer-bottom text-center">
                <p>© 2024 Filmnet. All rights reserved. | Premium Ethiopian Movie Streaming</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registerForm');
            const passwordInput = document.getElementById('password');
            const passwordStrength = document.getElementById('passwordStrength');
            
            // Password strength checker
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                let message = '';
                
                if (password.length >= 8) strength++;
                if (/[a-z]/.test(password)) strength++;
                if (/[A-Z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;
                if (/[^A-Za-z0-9]/.test(password)) strength++;
                
                switch(strength) {
                    case 0:
                    case 1:
                        message = '<span class="strength-weak">Weak password</span>';
                        break;
                    case 2:
                    case 3:
                        message = '<span class="strength-medium">Medium password</span>';
                        break;
                    case 4:
                    case 5:
                        message = '<span class="strength-strong">Strong password</span>';
                        break;
                }
                
                passwordStrength.innerHTML = message;
            });
            
            // Form validation
            form.addEventListener('submit', function(e) {
                const fname = document.getElementById('fname').value.trim();
                const lname = document.getElementById('lname').value.trim();
                const username = document.getElementById('username').value.trim();
                const email = document.getElementById('email').value.trim();
                const password = document.getElementById('password').value;
                
                if (!fname || !lname || !username || !email || !password) {
                    e.preventDefault();
                    alert('Please fill in all fields');
                    return;
                }
                
                if (password.length < 6) {
                    e.preventDefault();
                    alert('Password must be at least 6 characters long');
                    return;
                }
                
                if (!email.includes('@')) {
                    e.preventDefault();
                    alert('Please enter a valid email address');
                    return;
                }
            });
            
            // Add smooth animations on form interaction
            const inputs = document.querySelectorAll('.form-input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.transform = 'scale(1.02)';
                });
                
                input.addEventListener('blur', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>
</html>

