<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}

// Include database connection or questions file
require_once 'quiz_data.php';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_question'])) {
        // Add new question logic
        $newQuestion = [
            'question' => $_POST['question'],
            'options' => [
                'a' => $_POST['option_a'],
                'b' => $_POST['option_b'],
                'c' => $_POST['option_c'],
                'd' => $_POST['option_d']
            ],
            'answer' => $_POST['correct_answer']
        ];
        
        // Add to questions array (in a real app, you'd save to database)
        $questions[] = $newQuestion;
        // Save questions back to file/database
    } elseif (isset($_POST['edit_question'])) {
        // Edit question logic
    } elseif (isset($_POST['delete_question'])) {
        // Delete question logic
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }
        .question-list {
            margin: 20px 0;
        }
        .question-item {
            background: #f9f9f9;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            border-left: 4px solid #4CAF50;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .options-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }
        .option-item {
            display: flex;
            align-items: center;
        }
        .option-item input[type="radio"] {
            margin-right: 10px;
        }
        button, .btn {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        button:hover, .btn:hover {
            background-color: #45a049;
        }
        .btn-danger {
            background-color: #f44336;
        }
        .btn-danger:hover {
            background-color: #d32f2f;
        }
        .logout-link {
            float: right;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quiz Admin Panel <a href="logout.php" class="logout-link">Logout</a></h1>
        
        <div class="question-list">
            <h2>Current Questions</h2>
            <?php foreach ($questions as $index => $question): ?>
            <div class="question-item">
                <h3>Question <?= $index + 1 ?></h3>
                <p><?= htmlspecialchars($question['question']) ?></p>
                <div class="options">
                    <?php foreach ($question['options'] as $key => $option): ?>
                        <p><strong><?= strtoupper($key) ?>:</strong> <?= htmlspecialchars($option) ?> 
                        <?= ($key == $question['answer']) ? '(Correct)' : '' ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="actions">
                    <a href="?edit=<?= $index ?>" class="btn">Edit</a>
                    <a href="?delete=<?= $index ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="add-question">
            <h2><?= isset($_GET['edit']) ? 'Edit Question' : 'Add New Question' ?></h2>
            <form method="POST">
                <div class="form-group">
                    <label for="question">Question:</label>
                    <textarea name="question" id="question" rows="3" required></textarea>
                </div>
                
                <div class="form-group">
                    <label>Options:</label>
                    <div class="options-container">
                        <div class="option-item">
                            <input type="radio" name="correct_answer" value="a" required>
                            <input type="text" name="option_a" placeholder="Option A" required>
                        </div>
                        <div class="option-item">
                            <input type="radio" name="correct_answer" value="b">
                            <input type="text" name="option_b" placeholder="Option B" required>
                        </div>
                        <div class="option-item">
                            <input type="radio" name="correct_answer" value="c">
                            <input type="text" name="option_c" placeholder="Option C" required>
                        </div>
                        <div class="option-item">
                            <input type="radio" name="correct_answer" value="d">
                            <input type="text" name="option_d" placeholder="Option D" required>
                        </div>
                    </div>
                </div>
                
                <button type="submit" name="<?= isset($_GET['edit']) ? 'edit_question' : 'add_question' ?>">
                    <?= isset($_GET['edit']) ? 'Update Question' : 'Add Question' ?>
                </button>
            </form>
        </div>
    </div>
</body>
</html>