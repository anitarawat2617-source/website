<?php
include("connection.php") ;
// include("style.css");
// Redirect if already logged in
if (isLoggedIn()) {
    redirect('dashboard.php');
}
$username = $password = '';
$error = '';

// Process login form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);
    
    // Validate inputs
    if (empty($username) || empty($password)) {
        $error = 'Please enter both username and password.';
    } else {
        // Check user credentials
        $user = getUserByUsername($username, $pdo);
        
        if ($user && verifyPassword($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['full_name'] = $user['full_name'];
            
            // Redirect to dashboard
            redirect('dashboard.php');
        } else {
            $error = 'Invalid username or password.';
        }
    }
}

// Set page title
$page_title = "Login - " . SITE_NAME;
include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Online Examination System</title>
</head>
<body>
    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="login-container">
                <div class="login-left">
                    <h2>Welcome Back!</h2>
                    <p>Sign in to continue your learning journey and access your personalized dashboard.</p>
                    <ul class="features-list">
                        <li><i class="fas fa-check-circle"></i> Take exams in multiple subjects</li>
                        <li><i class="fas fa-check-circle"></i> Instant results with detailed feedback</li>
                        <li><i class="fas fa-check-circle"></i> Track your progress over time</li>
                        <li><i class="fas fa-check-circle"></i> Access study materials and resources</li>
                    </ul>
                </div>
                <div class="login-right">
                    <div class="login-header">
                        <h1>Log in</h1>
                        <div class="register-link">
                            <strong>New user? <a href="register.php">Register Now</a></strong>
                        </div>
                    </div>
                    
               
                    <form id="loginForm">
                        <div class="form-group">
                            <label for="username">Username or Email</label>
                            <input type="text" id="username" class="form-control" placeholder="Username or Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" placeholder="Enter password" required>
                        </div>
                        <div class="form-options">
                            <div class="remember-me">
                                <input type="checkbox" id="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                            <a href="forgot-password.html" class="forgot-password">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary"><a href="dashboard.php">Sign In</a></button>
                    </form>
                    
                    <div class="privacy-policy">
                        By creating this account, you agree to our <a href="#">Privacy Policy</a> & <a href="#">Cookie Policy</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
r
    
    <!-- <script>
        // Form submission handling
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const remember = document.getElementById('remember').checked;
            
            // Simple validation
            if (!username || !password) {
                alert('Please fill in all fields');
                return;
            }
            
            // In a real application, you would send this data to a server
            console.log('Login attempt:', { username, password, remember });
            
            // Simulate successful login
            alert('Login successful! Redirecting to dashboard...');
            // window.location.href = 'dashboard.html';
        });

        // Google login button
        document.querySelector('.google-btn').addEventListener('click', function() {
            alert('Redirecting to Google authentication...');
            // In a real application, you would redirect to Google OAuth
        });
    </script> -->
    <?php include("footer.php");?>
</body>
</html>