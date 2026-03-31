<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Online Examination System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 1.8rem;
            font-weight: 700;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            padding: 5px 10px;
            border-radius: 4px;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Dashboard Layout */
        .dashboard-container {
            display: grid;
            grid-template-columns: 250px 1fr;
            min-height: calc(100vh - 140px);
            flex: 1;
        }

        /* Sidebar */
        .sidebar {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 30px 0;
        }

        .user-profile {
            text-align: center;
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .user-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #ff6b6b;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 2rem;
            color: white;
            font-weight: bold;
        }

        .user-name {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .user-role {
            color: #b3c5ef;
            font-size: 0.9rem;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }

        .sidebar-menu a:hover, .sidebar-menu a.active {
            background: rgba(255, 255, 255, 0.1);
            border-left: 4px solid #ff6b6b;
        }

        .sidebar-menu i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            padding: 30px;
            background: #f5f7fa;
            overflow-y: auto;
        }

        /* Welcome Section */
        .welcome-section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .welcome-section h1 {
            color: #1e3c72;
            margin-bottom: 20px;
        }

        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .stat-card {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #ff6b6b;
        }

        .stat-card h3 {
            font-size: 2rem;
            margin-bottom: 5px;
        }

        /* Upcoming Exams */
        .upcoming-exams {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .section-title {
            color: #1e3c72;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }

        .exam-list {
            display: grid;
            gap: 20px;
        }

        .exam-card {
            background: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            border-left: 4px solid #ff6b6b;
            transition: all 0.3s;
        }

        .exam-card:hover {
            background: #f0f7ff;
            transform: translateX(5px);
        }

        .exam-card h3 {
            color: #1e3c72;
            margin-bottom: 10px;
        }

        .exam-card p {
            color: #666;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }

        .exam-card i {
            margin-right: 8px;
            color: #1e3c72;
        }

        /* Recent Results */
        .recent-results {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .results-table {
            width: 100%;
            border-collapse: collapse;
        }

        .results-table th,
        .results-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #f0f0f0;
        }

        .results-table th {
            background: #f8f9fa;
            color: #1e3c72;
            font-weight: 600;
        }

        .status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .status.passed {
            background: #e8f5e8;
            color: #2ecc71;
        }

        .status.failed {
            background: #ffe8e8;
            color: #e74c3c;
        }

        /* Progress Section */
        .progress-section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .progress-charts {
            display: grid;
            gap: 20px;
        }

        .subject-progress {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .subject-progress h4 {
            min-width: 120px;
            color: #1e3c72;
        }

        .progress-bar {
            flex: 1;
            height: 10px;
            background: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #ff6b6b, #ff5252);
            border-radius: 5px;
            transition: width 0.5s ease;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6b6b;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: #ff6b6b;
        }

        .btn-primary:hover {
            background-color: #ff5252;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPjxwYXRoIGQ9Ik0xMiAxNWw0LjI0My00LjI0M2ExIDEgMCAwIDAgMC0xLjQxNEwxMiA1bC00LjI0MyA0LjI0M2ExIDEgMCAwIDAgMCAxLjQxNEwxMiAxNXoiLz48cGF0aCBkPSJNMTIgMTVsNC4yNDMgNC4yNDNhMSAxIDAgMCAxIDAgMS40MTRMMTIgMjNsLTQuMjQzLTQuMjQzYTEgMSAwIDAgMSAwLTEuNDE0TDEyIDE1eiIvPjwvc3ZnPg==" alt="Exam System Logo">
                    <h1>Online Examination System</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="dashboard.php" class="active">Dashboard</a></li>
                        <li><a href="availabeExams.php">Exams</a></li>
                        <li><a href="results.php">Results</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Dashboard Content -->
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="user-profile">
                <div class="user-avatar">JS</div>
                <div class="user-name">John Student</div>
                <div class="user-role">Student</div>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.php" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="availabeExams.php"><i class="fas fa-clipboard-list"></i> Available Exams</a></li>
                <li><a href="myexam.php"><i class="fas fa-book"></i> My Exams</a></li>
                <li><a href="results.html"><i class="fas fa-chart-bar"></i> Results</a></li>
                <li><a href="study-materials.html"><i class="fas fa-file-alt"></i> Study Materials</a></li>
                <li><a href="progress.html"><i class="fas fa-chart-line"></i> Progress</a></li>
                <li><a href="profile.php"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="contact.php"><i class="fas fa-question-circle"></i> Help & Support</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Welcome Section -->
            <div class="welcome-section">
                <h1>Welcome back, John!</h1>
                <p>Ready to continue your learning journey? You have upcoming exams to prepare for.</p>
                
                <div class="stats-cards">
                    <div class="stat-card">
                        <i class="fas fa-clipboard-list"></i>
                        <h3>5</h3>
                        <p>Upcoming Exams</p>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-chart-line"></i>
                        <h3>85%</h3>
                        <p>Average Score</p>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-trophy"></i>
                        <h3>12</h3>
                        <p>Exams Completed</p>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-clock"></i>
                        <h3>3</h3>
                        <p>Pending Results</p>
                    </div>
                </div>
            </div>

            <!-- Upcoming Exams -->
            <div class="upcoming-exams">
                <h2 class="section-title">Upcoming Exams</h2>
                <div class="exam-list">
                    <div class="exam-card">
                        <h3>Mathematics Final Examination</h3>
                        <p><i class="fas fa-calendar"></i> December 15, 2023 | 10:00 AM</p>
                        <p><i class="fas fa-clock"></i> Duration: 2 hours</p>
                        <p><i class="fas fa-file-alt"></i> 50 Multiple Choice Questions</p>
                        <button class="btn btn-primary">Start Exam</button>
                    </div>
                    <div class="exam-card">
                        <h3>Science Midterm Test</h3>
                        <p><i class="fas fa-calendar"></i> December 18, 2023 | 2:00 PM</p>
                        <p><i class="fas fa-clock"></i> Duration: 1.5 hours</p>
                        <p><i class="fas fa-file-alt"></i> 40 Questions</p>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Recent Results -->
            <div class="recent-results">
                <h2 class="section-title">Recent Results</h2>
                <table class="results-table">
                    <thead>
                        <tr>
                            <th>Exam</th>
                            <th>Date</th>
                            <th>Score</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Science Midterm</td>
                            <td>Dec 10, 2023</td>
                            <td>92%</td>
                            <td><span class="status passed">Passed</span></td>
                            <td><a href="#" class="btn">View Details</a></td>
                        </tr>
                        <tr>
                            <td>English Literature</td>
                            <td>Dec 5, 2023</td>
                            <td>78%</td>
                            <td><span class="status passed">Passed</span></td>
                            <td><a href="#" class="btn">View Details</a></td>
                        </tr>
                        <tr>
                            <td>History Quiz</td>
                            <td>Dec 1, 2023</td>
                            <td>65%</td>
                            <td><span class="status passed">Passed</span></td>
                            <td><a href="#" class="btn">View Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Progress Tracking -->
            <div class="progress-section">
                <h2 class="section-title">Your Progress</h2>
                <div class="progress-charts">
                    <div class="subject-progress">
                        <h4>Mathematics</h4>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 75%"></div>
                        </div>
                        <span>75%</span>
                    </div>
                    <div class="subject-progress">
                        <h4>Science</h4>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 60%"></div>
                        </div>
                        <span>60%</span>
                    </div>
                    <div class="subject-progress">
                        <h4>English</h4>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 85%"></div>
                        </div>
                        <span>85%</span>
                    </div>
                    <div class="subject-progress">
                        <h4>History</h4>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 45%"></div>
                        </div>
                        <span>45%</span>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
<?php include("footer.php");?>
</body>
</html>