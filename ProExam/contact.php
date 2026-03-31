<?php include("header.php");
include("style.css");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Online Examination System</title>
    <style>


        .main-content {
            flex: 1;
            padding: 60px 0;
        }

        .page-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .page-header h1 {
            font-size: 2.5rem;
            color: #1e3c72;
            margin-bottom: 15px;
        }

        .page-header p {
            color: #070707ff;
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        /* Contact Container */
        .contact-container {
            display: flex;
            gap: 40px;
            margin-bottom: 60px;
        }
/* contact information */
        .contact-info {
            flex: 1;
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }


        /* .contact-info h2 {
            font-size: 1.8rem;
            color: #1e3c72;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        } */

        .contact-details {
            margin-bottom: 40px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        .contact-text h3 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: #0a0a0aff;
        }

        .contact-text p {
            color: #666;
        }
       
    </style>
</head>
<body>


    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="page-header">
                <h1>Contact Us</h1>
                <p>We're here to help! Get in touch with us for any questions, support, or feedback about our online examination system.</p>
            </div>
            
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-text">
                                <h3>Our Location</h3>
                                <p>123 Education Street<br>Learning City, LC 12345</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-text">
                                <h3>Phone Number</h3>
                                <p>+1 (555) 123-4567<br>+1 (555) 987-6543</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-text">
                                <h3>Email Address</h3>
                                <p>info@examsystem.com<br>support@examsystem.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-text">
                                <h3>Working Hours</h3>
                                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 2:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <form id="contactForm">
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
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" class="form-control" placeholder="Enter message subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" class="form-control" required>
                                <option value="">Select a category</option>
                                <option value="technical">Technical Support</option>
                                <option value="billing">Billing Inquiry</option>
                                <option value="feature">Feature Request</option>
                                <option value="feedback">General Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" placeholder="Enter your message here..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>

            <div class="faqsection">
                <h2>Frequently Asked Questions</h2>
                <div class="features-grid">
                    <div class="faqitem">
                        <h3>How do I reset my password?</h3>
                        <p>Click on the "Forgot Password" link on the login page and follow the instructions sent to your email.</p>
                    </div>
                    <div class="faqitem">
                        <h3>Can I take exams on mobile devices?</h3>
                        <p>Yes, our platform is fully responsive and works on smartphones, tablets, and desktop computers.</p>
                    </div>
                    <div class="faqitem">
                        <h3>How long does it take to get results?</h3>
                        <p>Most exams provide instant results. Some may take up to 24 hours if manual review is required.</p>
                    </div>
                    <div class="faqitem">
                        <h3>Is there a fee for using the system?</h3>
                        <p>Basic features are free. Premium features may require a subscription depending on your institution.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- <script>
        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const category = document.getElementById('category').value;
            const message = document.getElementById('message').value;
            
            // Simple validation
            if (!firstName || !lastName || !email || !subject || !category || !message) {
                alert('Please fill in all fields');
                return;
            }
            
            // In a real application, you would send this data to a server
            console.log('Contact form submission:', { 
                firstName, lastName, email, subject, category, message 
            });
            
            // Simulate successful submission
            alert('Thank you for your message! We will get back to you within 24 hours.');
            document.getElementById('contactForm').reset();
        });
    </script> -->
     <?php include ("footer.php"); ?>
</body>
</html>