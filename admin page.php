<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Filmnet</title>
    <link rel="stylesheet" href="assets/css/modern-style.css">
    <style>
        /* Admin Dashboard Specific Styles */
        .admin-dashboard {
            background: linear-gradient(135deg, var(--dark-bg) 0%, var(--darker-bg) 100%);
            min-height: 100vh;
        }
        
        .admin-header {
            background: rgba(15, 15, 15, 0.95);
            backdrop-filter: blur(15px);
            padding: 1.5rem 0;
            border-bottom: 3px solid var(--accent-color);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .admin-nav {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }
        
        .admin-logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .admin-logo .crown {
            font-size: 2rem;
            color: var(--accent-color);
            animation: pulse 2s infinite;
        }
        
        .admin-logo h1 {
            font-size: 2rem;
            color: var(--accent-color);
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .admin-user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            background: rgba(245, 197, 24, 0.1);
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            border: 1px solid rgba(245, 197, 24, 0.3);
        }
        
        .admin-user-info .avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--accent-color), #f39c12);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }
        
        .logout-btn {
            background: var(--primary-color);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
            text-decoration: none;
        }
        
        .logout-btn:hover {
            background: var(--hover-color);
            transform: translateY(-2px);
        }
        
        .dashboard-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }
        
        .welcome-section {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .welcome-title {
            font-size: 3rem;
            color: var(--accent-color);
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            animation: fadeInUp 1s ease-out;
        }
        
        .welcome-subtitle {
            font-size: 1.2rem;
            color: var(--text-secondary);
            animation: fadeInUp 1s ease-out 0.3s both;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }
        
        .stat-card {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border-top: 4px solid var(--accent-color);
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(245, 197, 24, 0.1), transparent);
            opacity: 0;
            transition: var(--transition);
        }
        
        .stat-card:hover::before {
            opacity: 1;
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(245, 197, 24, 0.2);
        }
        
        .stat-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--accent-color);
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: var(--text-secondary);
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .admin-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }
        
        .action-card {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            transition: var(--transition);
            position: relative;
            border-left: 5px solid var(--primary-color);
        }
        
        .action-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(229, 9, 20, 0.3);
        }
        
        .action-card h3 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .action-card p {
            color: var(--text-secondary);
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .action-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--hover-color));
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
            position: relative;
            overflow: hidden;
        }
        
        .action-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .action-btn:hover::before {
            left: 100%;
        }
        
        .action-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(229, 9, 20, 0.4);
        }
        
        .recent-activity {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            margin-bottom: 3rem;
        }
        
        .recent-activity h3 {
            color: var(--accent-color);
            font-size: 1.8rem;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .activity-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: rgba(245, 197, 24, 0.05);
            border-radius: 10px;
            margin-bottom: 1rem;
            border-left: 3px solid var(--accent-color);
            transition: var(--transition);
        }
        
        .activity-item:hover {
            background: rgba(245, 197, 24, 0.1);
            transform: translateX(5px);
        }
        
        .activity-icon {
            width: 40px;
            height: 40px;
            background: var(--accent-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--darker-bg);
            font-weight: bold;
        }
        
        .activity-content {
            flex: 1;
        }
        
        .activity-title {
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .activity-time {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        /* Management Sections */
        .management-section {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            margin-bottom: 3rem;
            border-left: 5px solid var(--accent-color);
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(245, 197, 24, 0.2);
        }
        
        .section-header h2 {
            color: var(--accent-color);
            font-size: 1.8rem;
            margin: 0;
        }
        
        .close-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .close-btn:hover {
            background: var(--hover-color);
            transform: scale(1.1);
        }
        
        .admin-form {
            max-width: 100%;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
        }
        
        .form-group.full-width {
            grid-column: 1 / -1;
        }
        
        .form-group label {
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 1rem;
            border: 2px solid rgba(245, 197, 24, 0.3);
            border-radius: 10px;
            background: rgba(47, 47, 47, 0.8);
            color: var(--text-primary);
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 15px rgba(245, 197, 24, 0.3);
        }
        
        .submit-btn {
            background: linear-gradient(135deg, var(--accent-color), #f39c12);
            color: var(--darker-bg);
            padding: 1.2rem 2.5rem;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: 600;
            transition: var(--transition);
            width: 100%;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(245, 197, 24, 0.4);
        }
        
        .action-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .action-buttons .action-btn {
            flex: 1;
            min-width: 150px;
        }
        
        /* User Management Styles */
        .user-list {
            max-height: 500px;
            overflow-y: auto;
        }
        
        .user-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            background: rgba(245, 197, 24, 0.05);
            border-radius: 15px;
            margin-bottom: 1rem;
            border-left: 4px solid var(--accent-color);
            transition: var(--transition);
        }
        
        .user-item:hover {
            background: rgba(245, 197, 24, 0.1);
            transform: translateX(5px);
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .user-avatar {
            width: 50px;
            height: 50px;
            background: var(--accent-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--darker-bg);
        }
        
        .user-details {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }
        
        .user-name {
            color: var(--text-primary);
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .user-email {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        .user-joined {
            color: var(--text-secondary);
            font-size: 0.8rem;
        }
        
        .user-actions {
            display: flex;
            gap: 0.5rem;
        }
        
        .edit-btn {
            background: var(--accent-color);
            color: var(--darker-bg);
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .edit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(245, 197, 24, 0.3);
        }
        
        .delete-btn {
            background: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .delete-btn:hover {
            background: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(229, 9, 20, 0.3);
        }
        
        .delete-btn-large {
            background: var(--primary-color);
            color: white;
            padding: 1.2rem 2.5rem;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: 600;
            transition: var(--transition);
            width: 100%;
        }
        
        .delete-btn-large:hover {
            background: var(--hover-color);
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(229, 9, 20, 0.4);
        }
        
        .warning-box {
            background: rgba(229, 9, 20, 0.1);
            border: 2px solid rgba(229, 9, 20, 0.3);
            border-radius: 10px;
            padding: 1rem;
            margin: 1.5rem 0;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .warning-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
        }
        
        @media (max-width: 768px) {
            .admin-nav {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }
            
            .welcome-title {
                font-size: 2rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .admin-actions {
                grid-template-columns: 1fr;
            }
            
            .dashboard-container {
                padding: 2rem 1rem;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .user-item {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
            
            .user-actions {
                justify-content: center;
            }
        }
    </style>
</head>

<body class="admin-dashboard">
    <!-- Admin Header -->
    <header class="admin-header">
        <div class="admin-nav">
            <div class="admin-logo">
                <span class="crown">👑</span>
                <h1>Filmnet Admin</h1>
            </div>
            <div class="admin-user-info">
                <div class="avatar">👤</div>
                <span>Administrator</span>
                <a href="alllogin_page.php" class="logout-btn">Logout</a>
            </div>
        </div>
    </header>

    <!-- Dashboard Container -->
    <div class="dashboard-container">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <h1 class="welcome-title">Welcome to Admin Dashboard</h1>
            <p class="welcome-subtitle">Manage your Filmnet platform with powerful admin tools</p>
        </div>

        <!-- Statistics Grid -->
        <div class="stats-grid">
            <div class="stat-card animate-fadeInUp">
                <span class="stat-icon">👥</span>
                <div class="stat-number">37</div>
                <div class="stat-label">Total Users</div>
            </div>
            <div class="stat-card animate-fadeInUp">
                <span class="stat-icon">🎬</span>
                <div class="stat-number">86</div>
                <div class="stat-label">Movies</div>
            </div>
            <div class="stat-card animate-fadeInUp">
                <span class="stat-icon">📊</span>
                <div class="stat-number">67</div>
                <div class="stat-label">Total Views</div>
            </div>
            <div class="stat-card animate-fadeInUp">
                <span class="stat-icon">💰</span>
                <div class="stat-number">$10</div>
                <div class="stat-label">Revenue</div>
            </div>
        </div>

        <!-- Admin Actions -->
        <div class="admin-actions">
            <div class="action-card animate-slideInLeft">
                <h3>🎭 Manage Movies</h3>
                <p>Add, edit, or remove movies from the platform. Upload new content and manage existing library.</p>
                <div class="action-buttons">
                    <button class="action-btn" onclick="showAddMovieForm()">➕ Add Movie</button>
                    <button class="action-btn" onclick="showUpdateMovieForm()">✏️ Update Movie</button>
                </div>
            </div>
            
            <div class="action-card animate-slideInRight">
                <h3>👥 User Management</h3>
                <p>View and manage user accounts, monitor user activity, and handle user-related issues.</p>
                <div class="action-buttons">
                    <button class="action-btn" onclick="showUserList()">👀 View Users</button>
                    <button class="action-btn" onclick="showDeleteUserForm()">🗑️ Delete User</button>
                </div>
            </div>
            
            <div class="action-card animate-slideInLeft">
                <h3>📊 Analytics</h3>
                <p>View detailed analytics, user engagement metrics, and platform performance statistics.</p>
                <button class="action-btn" onclick="showAnalytics()">📈 View Analytics</button>
            </div>
            
            <div class="action-card animate-slideInRight">
                <h3>⚙️ System Settings</h3>
                <p>Configure platform settings, manage system preferences, and update configurations.</p>
                <button class="action-btn" onclick="showSettings()">⚙️ System Settings</button>
            </div>
        </div>

        <!-- Management Sections (Initially Hidden) -->
        
        <!-- Add Movie Form -->
        <div id="addMovieSection" class="management-section" style="display: none;">
            <div class="section-header">
                <h2>➕ Add New Movie</h2>
                <button class="close-btn" onclick="hideAllSections()">✖️</button>
            </div>
            <form class="admin-form" action="addreg_codes.php" method="post" enctype="multipart/form-data">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="movieTitle">🎬 Movie Title</label>
                        <input type="text" id="movieTitle" name="movieTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="movieGenre">🎭 Genre</label>
                        <select id="movieGenre" name="movieGenre" required>
                            <option value="">Select Genre</option>
                            <option value="action">Action</option>
                            <option value="comedy">Comedy</option>
                            <option value="drama">Drama</option>
                            <option value="horror">Horror</option>
                            <option value="romance">Romance</option>
                            <option value="sci-fi">Sci-Fi</option>
                            <option value="thriller">Thriller</option>
                            <option value="animation">Animation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="movieYear">📅 Release Year</label>
                        <input type="number" id="movieYear" name="movieYear" min="1900" max="2024" required>
                    </div>
                    <div class="form-group">
                        <label for="movieRating">⭐ Rating</label>
                        <input type="number" id="movieRating" name="movieRating" min="1" max="10" step="0.1" required>
                    </div>
                    <div class="form-group full-width">
                        <label for="movieDescription">📝 Description</label>
                        <textarea id="movieDescription" name="movieDescription" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="moviePoster">🖼️ Poster Image</label>
                        <input type="file" id="moviePoster" name="moviePoster" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="movieVideo">🎥 Video URL</label>
                        <input type="url" id="movieVideo" name="movieVideo" placeholder="https://youtube.com/embed/...">
                    </div>
                </div>
                <button type="submit" class="submit-btn">🚀 Add Movie</button>
            </form>
        </div>

        <!-- Update Movie Form -->
        <div id="updateMovieSection" class="management-section" style="display: none;">
            <div class="section-header">
                <h2>✏️ Update Movie</h2>
                <button class="close-btn" onclick="hideAllSections()">✖️</button>
            </div>
            <form class="admin-form">
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label for="selectMovie">🎬 Select Movie to Update</label>
                        <select id="selectMovie" name="selectMovie" onchange="loadMovieData()" required>
                            <option value="">Choose a movie...</option>
                            <option value="mr-bean">Mr. Bean</option>
                            <option value="chicken">Chicken Run</option>
                            <option value="superhero">Superhero</option>
                            <option value="deadpool">Deadpool & Wolverine</option>
                            <option value="joker">Joker</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="updateTitle">🎬 Movie Title</label>
                        <input type="text" id="updateTitle" name="updateTitle">
                    </div>
                    <div class="form-group">
                        <label for="updateGenre">🎭 Genre</label>
                        <select id="updateGenre" name="updateGenre">
                            <option value="action">Action</option>
                            <option value="comedy">Comedy</option>
                            <option value="drama">Drama</option>
                            <option value="horror">Horror</option>
                            <option value="romance">Romance</option>
                            <option value="sci-fi">Sci-Fi</option>
                            <option value="thriller">Thriller</option>
                            <option value="animation">Animation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="updateYear">📅 Release Year</label>
                        <input type="number" id="updateYear" name="updateYear" min="1900" max="2024">
                    </div>
                    <div class="form-group">
                        <label for="updateRating">⭐ Rating</label>
                        <input type="number" id="updateRating" name="updateRating" min="1" max="10" step="0.1">
                    </div>
                    <div class="form-group full-width">
                        <label for="updateDescription">📝 Description</label>
                        <textarea id="updateDescription" name="updateDescription" rows="4"></textarea>
                    </div>
                </div>
                <button type="submit" class="submit-btn">💾 Update Movie</button>
            </form>
        </div>

        <!-- User Management Section -->
        <div id="userManagementSection" class="management-section" style="display: none;">
            <div class="section-header">
                <h2>👥 User Management</h2>
                <button class="close-btn" onclick="hideAllSections()">✖️</button>
            </div>
            
            <!-- User List -->
            <div class="user-list">
                <div class="user-item">
                    <div class="user-info">
                        <div class="user-avatar">👤</div>
                        <div class="user-details">
                            <div class="user-name">John Doe</div>
                            <div class="user-email">john@example.com</div>
                            <div class="user-joined">Joined: 2024-01-15</div>
                        </div>
                    </div>
                    <div class="user-actions">
                        <button class="edit-btn" onclick="editUser('john')">✏️ Edit</button>
                        <button class="delete-btn" onclick="deleteUser('john')">🗑️ Delete</button>
                    </div>
                </div>
                
                <div class="user-item">
                    <div class="user-info">
                        <div class="user-avatar">👤</div>
                        <div class="user-details">
                            <div class="user-name">Jane Smith</div>
                            <div class="user-email">jane@example.com</div>
                            <div class="user-joined">Joined: 2024-02-20</div>
                        </div>
                    </div>
                    <div class="user-actions">
                        <button class="edit-btn" onclick="editUser('jane')">✏️ Edit</button>
                        <button class="delete-btn" onclick="deleteUser('jane')">🗑️ Delete</button>
                    </div>
                </div>
                
                <div class="user-item">
                    <div class="user-info">
                        <div class="user-avatar">👤</div>
                        <div class="user-details">
                            <div class="user-name">Mike Johnson</div>
                            <div class="user-email">mike@example.com</div>
                            <div class="user-joined">Joined: 2024-03-10</div>
                        </div>
                    </div>
                    <div class="user-actions">
                        <button class="edit-btn" onclick="editUser('mike')">✏️ Edit</button>
                        <button class="delete-btn" onclick="deleteUser('mike')">🗑️ Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete User Form -->
        <div id="deleteUserSection" class="management-section" style="display: none;">
            <div class="section-header">
                <h2>🗑️ Delete User</h2>
                <button class="close-btn" onclick="hideAllSections()">✖️</button>
            </div>
            <form class="admin-form" onsubmit="return confirmDelete()">
                <div class="form-group">
                    <label for="deleteUserSelect">👤 Select User to Delete</label>
                    <select id="deleteUserSelect" name="deleteUserSelect" required>
                        <option value="">Choose a user...</option>
                        <option value="john">John Doe (john@example.com)</option>
                        <option value="jane">Jane Smith (jane@example.com)</option>
                        <option value="mike">Mike Johnson (mike@example.com)</option>
                    </select>
                </div>
                <div class="warning-box">
                    <span class="warning-icon">⚠️</span>
                    <strong>Warning:</strong> This action cannot be undone. The user's account and all associated data will be permanently deleted.
                </div>
                <button type="submit" class="delete-btn-large">🗑️ Delete User</button>
            </form>
        </div>

        <!-- Recent Activity -->
        <div class="recent-activity animate-fadeInUp">
            <h3>📈 Recent Activity</h3>
            <div class="activity-item">
                <div class="activity-icon">👤</div>
                <div class="activity-content">
                    <div class="activity-title">New user registration: john_doe</div>
                    <div class="activity-time">2 minutes ago</div>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon">🎬</div>
                <div class="activity-content">
                    <div class="activity-title">Movie "Superhero" was viewed 3 times</div>
                    <div class="activity-time">15 minutes ago</div>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon">💰</div>
                <div class="activity-content">
                    <div class="activity-title">Revenue milestone: $10 reached</div>
                    <div class="activity-time">1 hour ago</div>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon">⚠️</div>
                <div class="activity-content">
                    <div class="activity-title">System backup completed successfully</div>
                    <div class="activity-time">3 hours ago</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Footer -->
    <footer class="footer-enhanced">
        <div class="container">
            <div class="footer-bottom text-center">
                <p>© 2024 Filmnet Admin Dashboard. All rights reserved. | Secure Administrative Panel</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animate statistics numbers
            const statNumbers = document.querySelectorAll('.stat-number');
            
            statNumbers.forEach(stat => {
                const finalNumber = stat.textContent;
                const isRevenue = finalNumber.includes('$');
                const numericValue = parseInt(finalNumber.replace(/[^0-9]/g, ''));
                
                let currentNumber = 0;
                const increment = Math.ceil(numericValue / 50);
                
                const timer = setInterval(() => {
                    currentNumber += increment;
                    if (currentNumber >= numericValue) {
                        currentNumber = numericValue;
                        clearInterval(timer);
                    }
                    
                    if (isRevenue) {
                        stat.textContent = '$' + currentNumber.toLocaleString();
                    } else {
                        stat.textContent = currentNumber.toLocaleString();
                    }
                }, 50);
            });
            
            // Add hover effects to action cards
            const actionCards = document.querySelectorAll('.action-card');
            actionCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.borderLeftWidth = '8px';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.borderLeftWidth = '5px';
                });
            });
            
            // Real-time clock
            function updateTime() {
                const now = new Date();
                const timeString = now.toLocaleTimeString();
                const dateString = now.toLocaleDateString();
                
                // You can add a clock element if needed
                console.log(`Admin Dashboard - ${dateString} ${timeString}`);
            }
            
            setInterval(updateTime, 1000);
            updateTime();
        });

        // Admin Management Functions
        function hideAllSections() {
            const sections = document.querySelectorAll('.management-section');
            sections.forEach(section => {
                section.style.display = 'none';
            });
        }

        function showAddMovieForm() {
            hideAllSections();
            document.getElementById('addMovieSection').style.display = 'block';
            document.getElementById('addMovieSection').scrollIntoView({ behavior: 'smooth' });
        }

        function showUpdateMovieForm() {
            hideAllSections();
            document.getElementById('updateMovieSection').style.display = 'block';
            document.getElementById('updateMovieSection').scrollIntoView({ behavior: 'smooth' });
        }

        function showUserList() {
            hideAllSections();
            document.getElementById('userManagementSection').style.display = 'block';
            document.getElementById('userManagementSection').scrollIntoView({ behavior: 'smooth' });
        }

        function showDeleteUserForm() {
            hideAllSections();
            document.getElementById('deleteUserSection').style.display = 'block';
            document.getElementById('deleteUserSection').scrollIntoView({ behavior: 'smooth' });
        }

        function showAnalytics() {
            alert('📊 Analytics feature coming soon! This will show detailed platform statistics and user engagement metrics.');
        }

        function showSettings() {
            alert('⚙️ System Settings feature coming soon! This will allow you to configure platform settings and preferences.');
        }

        // Movie Management Functions
        function loadMovieData() {
            const selectedMovie = document.getElementById('selectMovie').value;
            const movieData = {
                'mr-bean': {
                    title: 'Mr. Bean',
                    genre: 'comedy',
                    year: 2021,
                    rating: 9.0,
                    description: 'Join the hilarious adventures of Mr. Bean in this classic comedy.'
                },
                'chicken': {
                    title: 'Chicken Run',
                    genre: 'animation',
                    year: 2024,
                    rating: 8.6,
                    description: 'Join Ginger and her fellow chickens in their daring escape from Tweedy\'s Farm.'
                },
                'superhero': {
                    title: 'Superhero',
                    genre: 'action',
                    year: 2024,
                    rating: 8.6,
                    description: 'Experience the ultimate superhero adventure filled with spectacular action sequences.'
                }
            };

            if (selectedMovie && movieData[selectedMovie]) {
                const movie = movieData[selectedMovie];
                document.getElementById('updateTitle').value = movie.title;
                document.getElementById('updateGenre').value = movie.genre;
                document.getElementById('updateYear').value = movie.year;
                document.getElementById('updateRating').value = movie.rating;
                document.getElementById('updateDescription').value = movie.description;
            }
        }

        // User Management Functions
        function editUser(userId) {
            alert(`✏️ Edit user: ${userId}\nThis feature will allow you to modify user details, reset passwords, and update user permissions.`);
        }

        function deleteUser(userId) {
            if (confirm(`⚠️ Are you sure you want to delete user: ${userId}?\n\nThis action cannot be undone and will permanently remove the user's account and all associated data.`)) {
                alert(`🗑️ User ${userId} has been deleted successfully.`);
                // Here you would typically make an AJAX call to delete the user
                // location.reload(); // Refresh the page to update the user list
            }
        }

        function confirmDelete() {
            const selectedUser = document.getElementById('deleteUserSelect').value;
            if (!selectedUser) {
                alert('Please select a user to delete.');
                return false;
            }
            
            const confirmMessage = `⚠️ FINAL WARNING ⚠️\n\nYou are about to permanently delete the selected user account.\n\nThis action will:\n• Remove all user data\n• Delete viewing history\n• Cancel any active subscriptions\n• Cannot be undone\n\nType "DELETE" to confirm:`;
            
            const confirmation = prompt(confirmMessage);
            if (confirmation === 'DELETE') {
                alert(`🗑️ User account has been permanently deleted.`);
                return true;
            } else {
                alert('❌ Deletion cancelled.');
                return false;
            }
        }

        // Form validation for add movie
        document.addEventListener('DOMContentLoaded', function() {
            const addMovieForm = document.querySelector('#addMovieSection form');
            if (addMovieForm) {
                addMovieForm.addEventListener('submit', function(e) {
                    const title = document.getElementById('movieTitle').value.trim();
                    const genre = document.getElementById('movieGenre').value;
                    const year = document.getElementById('movieYear').value;
                    const rating = document.getElementById('movieRating').value;
                    
                    if (!title || !genre || !year || !rating) {
                        e.preventDefault();
                        alert('Please fill in all required fields.');
                        return;
                    }
                    
                    if (year < 1900 || year > 2024) {
                        e.preventDefault();
                        alert('Please enter a valid release year between 1900 and 2024.');
                        return;
                    }
                    
                    if (rating < 1 || rating > 10) {
                        e.preventDefault();
                        alert('Please enter a rating between 1 and 10.');
                        return;
                    }
                    
                    alert('🎬 Movie added successfully!');
                });
            }
        });
    </script>
</body>
</html>

