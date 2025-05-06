<?php
session_start();

// Check if user is admin trying to access regular interface
if (isset($_SESSION['admin']) {
    header("Location: admin.php");
    exit;
}

// Initialize user session if not set
if (!isset($_SESSION['quiz_started'])) {
    $_SESSION['quiz_started'] = true;
    $_SESSION['start_time'] = time();
    $_SESSION['answers'] = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30-Item Online Quiz</title>
    <style>
        /* Your existing CSS styles here */
        .timer {
            position: fixed;
            top: 10px;
            right: 10px;
            background: #4CAF50;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
            z-index: 1000;
        }
        .login-link {
            position: fixed;
            top: 10px;
            left: 10px;
            background: #333;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            z-index: 1000;
        }
    </style>
</head>
<body>
    <div class="timer" id="timer">Time: 30:00</div>
    <a href="admin_login.php" class="login-link">Admin Login</a>
    
    <!-- Your existing quiz content here -->
    
    <script>
        // Timer functionality
        let timeLeft = 30 * 60; // 30 minutes
        const timer = document.getElementById('timer');
        
        function updateTimer() {
            const minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            timer.textContent = `Time: ${minutes}:${seconds}`;
            
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                document.getElementById('submit-btn').click();
            } else {
                timeLeft--;
            }
        }
        
        const timerInterval = setInterval(updateTimer, 1000);
        
        // Your existing JavaScript code here
    </script>
</body>
</html>