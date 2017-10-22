<?php
    session_start();
    $_SESSION['count']=$_SESSION['count']+1;
    header("Location: /QuizMaster/views/AttemptQuiz.php");
?>