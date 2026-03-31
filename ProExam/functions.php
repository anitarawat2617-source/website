<?php
// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to redirect to another page
function redirect($url) {
    header("Location: $url");
    exit();
}

// Function to check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Function to check if user is admin
function isAdmin() {
    return (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');
}

// Function to generate random token for password reset
function generateToken() {
    return bin2hex(random_bytes(32));
}

// Function to hash password
function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Function to verify password
function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}

// Function to get user by email
function getUserByEmail($email, $pdo) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Function to get user by username
function getUserByUsername($username, $pdo) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Function to get all subjects
function getAllSubjects($pdo) {
    $stmt = $pdo->query("SELECT * FROM subjects");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get questions by subject
function getQuestionsBySubject($subject_id, $pdo) {
    $stmt = $pdo->prepare("SELECT * FROM questions WHERE subject_id = ?");
    $stmt->execute([$subject_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get exam by subject
function getExamBySubject($subject_id, $pdo) {
    $stmt = $pdo->prepare("SELECT * FROM exams WHERE subject_id = ?");
    $stmt->execute([$subject_id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Function to get user results
function getUserResults($user_id, $pdo) {
    $stmt = $pdo->prepare("SELECT r.*, s.subject_name, e.exam_name 
                          FROM results r 
                          JOIN subjects s ON r.subject_id = s.subject_id 
                          JOIN exams e ON r.exam_id = e.exam_id 
                          WHERE r.user_id = ? 
                          ORDER BY r.end_time DESC");
    $stmt->execute([$user_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get result details
function getResultDetails($result_id, $pdo) {
    $stmt = $pdo->prepare("SELECT sa.*, q.question_text, q.correct_answer 
                          FROM student_answers sa 
                          JOIN questions q ON sa.question_id = q.question_id 
                          WHERE sa.result_id = ?");
    $stmt->execute([$result_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>