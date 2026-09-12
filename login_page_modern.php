<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Filmnet</title>
    <link rel="stylesheet" href="assets/css/modern-style.css">
    <link rel="icon" type="image/x-icon" href="tampler/favicon.ico">
    <style>
        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--dark-bg) 0%, var(--darker-bg) 100%),
                        url('tampler/baground/3babc65de5d5b9f42b211ee1112197e0.jpg');
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
        }
        
        .login-container {
            background: rgba(47, 47, 47, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(229, 9, 20, 0.3);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }
        
        .back-link {
            position: absolute;
            top: 2rem;
            left: 2rem;
            color: var(--text-primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            transition: var(--transition);
        }
        
        .back-link:hover {
            color: var(--primary-color);
        }
        
        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--darker-bg);
        }
        
        .register-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }
        
        .register-link a:hover {
            color: var(--accent-color);
        }
        
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(229, 9, 20, 0.1);
        }
        
        .error-message {
            background: rgba(244, 6, 18, 0.1);
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            padding: 1rem;
            border-radius: var(--border-radius);
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .success-message {
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid #22c55e;
            color: #22c55e;
            padding: 1rem;
            border-radius: var(--border-radius);
            margin-bottom: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-page">
        <a href="frest.php" class="back-link">
            ← Back to Home
        </a>
        
        <div class="form-container login-container">
            <h1 class="form-title">Welcome Back</h1>
            <p class="text-center" style="color: var(--text-secondary); margin-bottom: 2rem;">
                Sign in to your Filmnet account
            </p>
            
            <!-- Error/Success Messages -->
            <?php if (isset($_GET['error'])): ?>
                <div class="error-message">
                    Invalid username or password. Please try again.
                </div>
            <?php endif; ?>
            
            <?php if (isset($_GET['success'])): ?>
                <div class="success-message">
                    Registration successful! Please login with your credentials.
                </div>
            <?php endif; ?>
            
            <form action="login_code.php" method="post" autocomplete="off">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input 
                        type="text" 
                        name="username" 
                        id="username" 
                        class="form-input" 
                        placeholder="Enter your username"
                        required
                        autocomplete="off"
                    >
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        class="form-input" 
                        placeholder="Enter your password"
                        required
                        autocomplete="off"
                    >
                </div>
                
                <div class="form-actions">
                    <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">
                        Sign In
                    </button>
                </div>
                
                <div class="form-actions" style="margin-top: 1rem;">
                    <button type="reset" name="reset" class="btn btn-secondary" style="width: 100%;">
                        Clear Form
                    </button>
                </div>
            </form>
            
            <div class="register-link">
                <p style="color: var(--text-secondary);">
                    Don't have an account? 
                    <a href="filmnet.php">Create Account</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            
            if (!username || !password) {
                e.preventDefault();
                alert('Please fill in all fields');
                return false;
            }
            
            if (username.length < 3) {
                e.preventDefault();
                alert('Username must be at least 3 characters long');
                return false;
            }
            
            if (password.length < 6) {
                e.preventDefault();
                alert('Password must be at least 6 characters long');
                return false;
            }
        });

        // Auto-focus first input
        document.getElementById('username').focus();

        // Enter key navigation
        document.getElementById('username').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('password').focus();
            }
        });

        // Clear error messages on input
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('input', function() {
                const errorMsg = document.querySelector('.error-message');
                if (errorMsg) {
                    errorMsg.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>