<?php
// Database connection
$host = 'localhost';
$dbname = 'quiz_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

// Function to get all questions
function getQuestions($pdo) {
    $stmt = $pdo->query("SELECT * FROM questions ORDER BY question_number");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to save quiz results
function saveResult($pdo, $userName, $score, $totalQuestions, $percentage, $answers) {
    try {
        $pdo->beginTransaction();
        
        // Save main result
        $stmt = $pdo->prepare("INSERT INTO results (user_name, score, total_questions, percentage) VALUES (?, ?, ?, ?)");
        $stmt->execute([$userName, $score, $totalQuestions, $percentage]);
        $resultId = $pdo->lastInsertId();
        
        // Save each answer
        $stmt = $pdo->prepare("INSERT INTO user_answers (result_id, question_id, user_answer, is_correct) VALUES (?, ?, ?, ?)");
        foreach ($answers as $answer) {
            $stmt->execute([$resultId, $answer['question_id'], $answer['user_answer'], $answer['is_correct']]);
        }
        
        $pdo->commit();
        return $resultId;
    } catch (Exception $e) {
        $pdo->rollBack();
        throw $e;
    }
}

// Function to get result details
function getResultDetails($pdo, $resultId) {
    $stmt = $pdo->prepare("
        SELECT r.*, q.question_number, q.question_text, ua.user_answer, ua.is_correct 
        FROM results r
        JOIN user_answers ua ON r.id = ua.result_id
        JOIN questions q ON ua.question_id = q.id
        WHERE r.id = ?
        ORDER BY q.question_number
    ");
    $stmt->execute([$resultId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>