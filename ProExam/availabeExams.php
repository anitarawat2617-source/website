<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Exams - Online Examination System</title>
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

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 40px 0;
        }

        .page-header {
            margin-bottom: 30px;
            text-align: center;
        }

        .page-header h1 {
            font-size: 2.2rem;
            color: #1e3c72;
            margin-bottom: 10px;
        }

        .page-header p {
            color: #666;
        }

        /* Filters */
        .filters {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .search-box {
            flex: 1;
            min-width: 200px;
        }

        .search-box input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
        }

        .filter-select {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: white;
            font-size: 1rem;
        }

        /* Exam Grid */
        .exam-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        .exam-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .exam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .exam-header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 20px;
        }

        .exam-header h3 {
            font-size: 1.3rem;
            margin-bottom: 5px;
        }

        .exam-subject {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .exam-body {
            padding: 20px;
        }

        .exam-details {
            margin-bottom: 20px;
        }

        .exam-detail {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            color: #666;
        }

        .exam-detail i {
            width: 25px;
            color: #1e3c72;
        }

        .exam-status {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .status-upcoming {
            background: #e3f2fd;
            color: #1976d2;
        }

        .status-ongoing {
            background: #fff3e0;
            color: #f57c00;
        }

        .status-completed {
            background: #e8f5e8;
            color: #2e7d32;
        }

        .exam-footer {
            padding: 15px 20px;
            border-top: 1px solid #f0f0f0;
            text-align: center;
        }

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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #ff6b6b;
            color: #ff6b6b;
        }

        .btn-outline:hover {
            background: #ff6b6b;
            color: white;
        }

        /* Footer */
        footer {
            background-color: #1e3c72;
            color: white;
            padding: 30px 0 20px;
            margin-top: auto;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: #ff6b6b;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #b3c5ef;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: white;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #b3c5ef;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }

            nav ul {
                margin-top: 20px;
                justify-content: center;
            }

            nav ul li {
                margin: 0 10px;
            }

            .filters {
                flex-direction: column;
                align-items: stretch;
            }

            .exam-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
  
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPjxwYXRoIGQ9Ik0xMiAxNWw0LjI0My00LjI0M2ExIDEgMCAwIDAgMC0xLjQxNEwxMiA1bC00LjI0MyA0LjI0M2ExIDEgMCAwIDAgMCAxLjQxNEwxMiAxNXoiLz48cGF0aCBkPSJNMTIgMTVsNC4yNDMgNC4yNDNhMSAxIDAgMCAxIDAgMS40MTRMMTIgMjNsLTQuMjQzLTQuMjQzYTEgMSAwIDAgMSAwLTEuNDE0TDEyIDE1eiIvPjwvc3ZnPg==" alt="Exam System Logo">
                    <h1>Online Examination System</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="available-exams.php" class="active">Available Exams</a></li>
                        <li><a href="results.php">Results</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="page-header">
                <h1>Available Exams</h1>
                <p>Browse and take exams across various subjects</p>
            </div>

            <!-- Filters -->
            <div class="filters">
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="Search exams by title or subject...">
                </div>
                <select id="subjectFilter" class="filter-select">
                    <option value="all">All Subjects</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Science">Science</option>
                    <option value="English">English</option>
                    <option value="History">History</option>
                </select>
                <select id="statusFilter" class="filter-select">
                    <option value="all">All Status</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="ongoing">Ongoing</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <!-- Exam Grid -->
            <div class="exam-grid" id="examGrid">
                <!-- Exams will be dynamically loaded via JavaScript -->
            </div>
        </div>
    </div>

    <!-- Footer -->
<?php include("footer.php");?>

    <script>
        // Sample exam data
        const exams = [
            {
                id: 1,
                title: "Mathematics Final Examination",
                subject: "Mathematics",
                date: "2025-01-15",
                time: "10:00 AM",
                duration: "2 hours",
                questions: 50,
                status: "upcoming",
                description: "Comprehensive test covering algebra, calculus, and geometry."
            },
            {
                id: 2,
                title: "Science Midterm Test",
                subject: "Science",
                date: "2025-01-18",
                time: "2:00 PM",
                duration: "1.5 hours",
                questions: 40,
                status: "upcoming",
                description: "Physics, chemistry, and biology topics."
            },
            {
                id: 3,
                title: "English Literature Quiz",
                subject: "English",
                date: "2025-01-10",
                time: "11:00 AM",
                duration: "1 hour",
                questions: 30,
                status: "ongoing",
                description: "Shakespeare, poetry, and modern literature."
            },
            {
                id: 4,
                title: "History Chapter 1-5",
                subject: "History",
                date: "2025-01-05",
                time: "9:00 AM",
                duration: "1 hour",
                questions: 25,
                status: "completed",
                description: "Ancient civilizations and medieval history."
            },
            {
                id: 5,
                title: "Advanced Mathematics",
                subject: "Mathematics",
                date: "2025-01-20",
                time: "3:00 PM",
                duration: "2.5 hours",
                questions: 60,
                status: "upcoming",
                description: "Calculus, linear algebra, and differential equations."
            },
            {
                id: 6,
                title: "Biology Practical Test",
                subject: "Science",
                date: "2025-01-12",
                time: "1:00 PM",
                duration: "1 hour",
                questions: 20,
                status: "ongoing",
                description: "Cell biology, genetics, and human anatomy."
            }
        ];

        // Function to render exams based on filters
        function renderExams() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const subjectFilter = document.getElementById('subjectFilter').value;
            const statusFilter = document.getElementById('statusFilter').value;

            const filteredExams = exams.filter(exam => {
                const matchesSearch = exam.title.toLowerCase().includes(searchTerm) || exam.subject.toLowerCase().includes(searchTerm);
                const matchesSubject = subjectFilter === 'all' || exam.subject === subjectFilter;
                const matchesStatus = statusFilter === 'all' || exam.status === statusFilter;
                return matchesSearch && matchesSubject && matchesStatus;
            });

            const examGrid = document.getElementById('examGrid');
            if (filteredExams.length === 0) {
                examGrid.innerHTML = '<div style="text-align: center; grid-column: 1/-1; padding: 40px;">No exams found matching your criteria.</div>';
                return;
            }

            examGrid.innerHTML = filteredExams.map(exam => `
                <div class="exam-card">
                    <div class="exam-header">
                        <h3>${exam.title}</h3>
                        <div class="exam-subject">${exam.subject}</div>
                    </div>
                    <div class="exam-body">
                        <div class="exam-status status-${exam.status}">
                            ${exam.status.charAt(0).toUpperCase() + exam.status.slice(1)}
                        </div>
                        <div class="exam-details">
                            <div class="exam-detail">
                                <i class="fas fa-calendar"></i> ${exam.date} | ${exam.time}
                            </div>
                            <div class="exam-detail">
                                <i class="fas fa-clock"></i> Duration: ${exam.duration}
                            </div>
                            <div class="exam-detail">
                                <i class="fas fa-question-circle"></i> ${exam.questions} Questions
                            </div>
                            <div class="exam-detail">
                                <i class="fas fa-info-circle"></i> ${exam.description}
                            </div>
                        </div>
                    </div>
                    <div class="exam-footer">
                        ${exam.status === 'upcoming' ? `<button class="btn btn-primary" onclick="startExam(${exam.id})">Start Exam</button>` :
                          exam.status === 'ongoing' ? `<button class="btn btn-primary" onclick="startExam(${exam.id})">Continue Exam</button>` :
                          `<button class="btn btn-outline" onclick="viewResults(${exam.id})">View Results</button>`}
                    </div>
                </div>
            `).join('');
        }

        // Event listeners for filters
        document.getElementById('searchInput').addEventListener('input', renderExams);
        document.getElementById('subjectFilter').addEventListener('change', renderExams);
        document.getElementById('statusFilter').addEventListener('change', renderExams);

        // Initial render
        renderExams();

        // Placeholder functions
        function startExam(examId) {
            alert(`Starting exam ${examId}...`);
            // In a real application, redirect to the exam page
            // window.location.href = `take-exam.php?id=${examId}`;
        }

        function viewResults(examId) {
            alert(`Viewing results for exam ${examId}...`);
            // In a real application, redirect to results page
            // window.location.href = `results.php?id=${examId}`;
        }
    </script>
</body>
</html>