<?php ("header.php");
include("style.css");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Online Examination System</title>
   <style>
      /* Mission Section */
        .mission-section {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 80px;
        }

        .mission-content {
            flex: 1;
        }

        .mission-content h2 {
            font-size: 2.2rem;
            color: #1e3c72;
            margin-bottom: 20px;
        }

        .mission-content p {
            color: #0e0d0dff;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .mission-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .mission-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Stats Section */
        .stats-section {
            background: white;
            border-radius: 15px;
            padding: 60px 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 80px;
        }

        .stats-section h2 {
            text-align: center;
            /* font-size: 2.2rem; */
            color: #1e3c72;
            margin-bottom: 50px;
        }

        /* .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        } */

        .stat-item {
            text-align: center;
            padding: 30px 20px;
            background: #f9f9f9;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .stat-item:hover {
            transform: translateY(-10px);
            background: #f0f7ff;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #ff6b6b;
            margin-bottom: 10px;
        }

        .stat-text {
            font-size: 1.1rem;
            color: #1e3c72;
            font-weight: 600;
        }

        /* Team Section */
        .team-section {
            margin-bottom: 80px;
        }

        .team-section h2 {
            text-align: center;
            font-size: 2.2rem;
            color: #1e3c72;
            margin-bottom: 50px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .team-member {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            text-align: center;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .member-image {
            height: 200px;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }

        .member-info {
            padding: 25px 20px;
        }

        .member-info h3 {
            font-size: 1.3rem;
            color: #1e3c72;
            margin-bottom: 5px;
        }

        .member-role {
            color: #ff6b6b;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .member-bio {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .member-social {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-link {
            width: 35px;
            height: 35px;
            background: #f5f7fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1e3c72;
            text-decoration: none;
            transition: all 0.3s;
        }

        .social-link:hover {
            background: #1e3c72;
            color: white;
        }

        /* Values Section */
        .values-section {
            background: white;
            border-radius: 15px;
            padding: 60px 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 80px;
        }

        .values-section h2 {
            text-align: center;
            font-size: 2.2rem;
            color: #1e3c72;
            margin-bottom: 50px;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .value-item {
            text-align: center;
            padding: 30px 20px;
        }

        .value-icon {
            width: 80px;
            height: 80px;
            background: #e6f0ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: #1e3c72;
            font-size: 2rem;
        }

        .value-item h3 {
            font-size: 1.3rem;
            color: #1e3c72;
            margin-bottom: 15px;
        }

        .value-item p {
            color: #666;
        }

        /* CTA Section */
        .cta-section {
            text-align: center;
            padding: 60px 40px;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            border-radius: 15px;
            margin-bottom: 60px;
        }

        .cta-section h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
        }


      
    </style>
</head>
<body>


    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="page-header">
                <h1>About Our Examination System</h1>
                <p>Transforming education through innovative technology and reliable assessment solutions</p>
            </div>

            <div class="mission-section">
                <div class="mission-content">
                    <h2>Our Mission</h2>
                    <p>We are dedicated to revolutionizing the way educational institutions conduct assessments by providing a secure, scalable, and user-friendly online examination platform.</p>
                    <p>Our mission is to make quality education accessible to everyone by eliminating geographical barriers and providing equal opportunities for all learners to demonstrate their knowledge and skills.</p>
                    <p>With cutting-edge technology and a commitment to excellence, we strive to create an assessment environment that is fair, transparent, and efficient for both educators and students.</p>
                </div>
                <div class="mission-image">
                    <div style="width:100%;height:400px;background:linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);display:flex;align-items:center;justify-content:center;color:white;font-size:1.2rem;">
                        <!-- <i class="fas fa-graduation-cap" style="font-size:4rem;margin-right:20px;"></i> -->
                        <div>Online Learning & Assessment Platform</div>
                    </div>
                </div>
            </div>

            <div class="stats-section">
                <h2>Our Impact in Numbers</h2>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">50K+</div>
                        <div class="stat-text">Students Served</div>
                    <!-- </div> -->
                    <!-- <div class="stat-item"> -->
                        <div class="stat-number">200+</div>
                        <div class="stat-text">Educational Institutions</div>
                    <!-- </div> -->
                    <!-- <div class="stat-item"> -->
                        <div class="stat-number">1M+</div>
                        <div class="stat-text">Exams Conducted</div>
                    <!-- </div> -->
                    <!-- <div class="stat-item"> -->
                        <div class="stat-number">98%</div>
                        <div class="stat-text">Satisfaction Rate</div>
                    <!-- </div> -->
                </div>
            </div>

            <div class="team-section">
                <h2>Meet Our Leadership Team</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-image">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="member-info">
                            <h3>Dr. Sarah Johnson</h3>
                            <div class="member-role">CEO & Founder</div>
                            <p class="member-bio">Former university professor with 15+ years in educational technology and assessment design.</p>
                            <div class="member-social">
                                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="member-image">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="member-info">
                            <h3>Michael Chen</h3>
                            <div class="member-role">CTO</div>
                            <p class="member-bio">Technology expert specializing in scalable cloud infrastructure and secure systems.</p>
                            <div class="member-social">
                                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="member-image">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="member-info">
                            <h3>Emily Rodriguez</h3>
                            <div class="member-role">Head of Education</div>
                            <p class="member-bio">Curriculum development specialist focused on creating effective assessment strategies.</p>
                            <div class="member-social">
                                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <div class="member-image">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="member-info">
                            <h3>David Kim</h3>
                            <div class="member-role">Product Manager</div>
                            <p class="member-bio">User experience advocate dedicated to creating intuitive and accessible platforms.</p>
                            <div class="member-social">
                                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="values-section">
                <h2>Our Core Values</h2>
                <div class="values-grid">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Security & Integrity</h3>
                        <p>We prioritize the security of our platform and maintain the highest standards of academic integrity.</p>
                    </div>
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Innovation</h3>
                        <p>We continuously evolve our technology to meet the changing needs of educators and students.</p>
                    </div>
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Accessibility</h3>
                        <p>We believe quality education should be accessible to everyone, regardless of location or background.</p>
                    </div>
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Student Success</h3>
                        <p>Everything we do is focused on helping students achieve their educational goals and reach their potential.</p>
                    </div>
                </div>
            </div>

            <div class="cta-section">
                <h2>Ready to Transform Your Assessment Process?</h2>
                <p>Join thousands of educational institutions already using our platform to conduct secure, efficient, and reliable examinations.</p>
                <a href="register.html" class="btn btn-primary">Get Started Today</a>
                <a href="contact.html" class="btn btn-secondary">Contact Our Team</a>
            </div>
        </div>
    </div>
<?php include("footer.php");?>
   
</body>
</html>