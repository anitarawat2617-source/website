<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Online Examination System</title>
</head>
<body>
  

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="register-container">
                <div class="register-left">
                    <h2> Welcome Back!</h2>
                    <p>Create an account to access our online examination platform and start your learning journey today.</p>
                    <ul class="features-list">
                         <li><i class="fas fa-check-circle"></i> Take exams in multiple subjects</li>
                        <li><i class="fas fa-check-circle"></i> Instant results with detailed feedback</li>
                        <li><i class="fas fa-check-circle"></i> Track your progress over time</li>
                        <li><i class="fas fa-check-circle"></i> Access study materials and resources</li>
                     </ul>
                </div>
                <div class="register-right">
                    <div class="register-header">
                        <h1>Create Account</h1>
                        <div class="login-link">
                            <strong>Already have an account? <a href="login.php">Login Now</a></strong>
                        </div>
                    </div>
                    
                    <form id="registerForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" class="form-control" placeholder="Enter your first name" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" class="form-control" placeholder="Enter your last name" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" class="form-control" placeholder="Choose a username" required>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" placeholder="Create a password" required>
                                <div id="passwordStrength" class="password-strength"></div>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm your password" required>
                                <div id="passwordMatch" class="password-strength"></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number (Optional)</label>
                            <input type="tel" id="phone" class="form-control" placeholder="Enter your phone number">
                        </div>
                        
                        <div class="form-group">
                            <label for="institution">Educational Institution</label>
                            <input type="text" id="institution" class="form-control" placeholder="School/College/University">
                        </div>
                        
                        <div class="form-group">
                            <label for="course">Course/Program</label>
                            <select id="course" class="form-control" required>
                                <option value="">Select your course</option>
                                <option value="highschool">High School</option>
                                <option value="undergraduate">Undergraduate</option>
                                <option value="postgraduate">Postgraduate</option>
                                <option value="professional">Professional Certification</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
<!--                         
                        <div class="form-options">
                            <div class="terms-agreement">
                                <input type="checkbox" id="terms" required>
                                <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                            </div>
                        </div>
                        
                        <div class="form-options">
                            <div class="terms-agreement">
                                <input type="checkbox" id="newsletter">
                                <label for="newsletter">Send me updates about new features and exams</label>
                            </div>
                        </div> -->
                        
                        <button type="submit" class="btn btn-primary" id="registerBtn">Create Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Password strength indicator
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthIndicator = document.getElementById('passwordStrength');
            
            // Reset classes
            strengthIndicator.className = 'password-strength';
            
            if (password.length === 0) {
                strengthIndicator.textContent = '';
                return;
            }
            
            // Calculate password strength
            let strength = 0;
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password)) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^A-Za-z0-9]/.test(password)) strength++;
            
            // Update strength indicator
            if (strength <= 2) {
                strengthIndicator.textContent = 'Weak password';
                strengthIndicator.classList.add('weak');
            } else if (strength <= 4) {
                strengthIndicator.textContent = 'Medium strength password';
                strengthIndicator.classList.add('medium');
            } else {
                strengthIndicator.textContent = 'Strong password';
                strengthIndicator.classList.add('strong');
            }
        });
        
        // Password confirmation check
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            const matchIndicator = document.getElementById('passwordMatch');
            
            if (confirmPassword.length === 0) {
                matchIndicator.textContent = '';
                return;
            }
            
            if (password === confirmPassword) {
                matchIndicator.textContent = 'Passwords match';
                matchIndicator.className = 'password-strength strong';
            } else {
                matchIndicator.textContent = 'Passwords do not match';
                matchIndicator.className = 'password-strength weak';
            }
        });
        
        // Form submission handling
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const terms = document.getElementById('terms').checked;
            
            // Validation
            if (password !== confirmPassword) {
                alert('Passwords do not match. Please check and try again.');
                return;
            }
            
            if (!terms) {
                alert('You must agree to the Terms of Service and Privacy Policy.');
                return;
            }
            
            // In a real application, you would send this data to a server
            console.log('Registration attempt:', { 
                firstName, lastName, email, username, password, terms 
            });
            
            // Simulate successful registration
            alert('Registration successful! Redirecting to login page...');
            // window.location.href = 'login.html';
        });
    </script>
    <?php include("footer.php");?>
</body>
</html>