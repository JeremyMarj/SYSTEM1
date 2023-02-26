<?php
include_once('include/session.php');

    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];
    $question6 = $_POST['question6'];
    $question7 = $_POST['question7'];
    $question8 = $_POST['question8'];
    $question9 = $_POST['question9'];
    $question10 = $_POST['question10'];
    $question11 = $_POST['question11'];
    $question12 = $_POST['question12'];
    $question13 = $_POST['question13'];
    $question14 = $_POST['question14'];
    $question15 = $_POST['question15'];
    $question16 = $_POST['question16'];
    $question17 = $_POST['question17'];
    $question18 = $_POST['question18'];
    $question19 = $_POST['question19'];
    $question20 = $_POST['question20'];



    $query = "INSERT into survey ('question1','question2','question3','question4','question5','question6','question7','question8','question9','question10','question11','question12','question13','question14','question15','question16','question17','question18','question19','question20') VALUES ('$question1','$question2','$question3','$question4','$question5','$question6','$question7','$question8','$question9','$question10','$question11','$question12','$question13','$question14','$question15','$question16','$question17','$question18','$question19','$question20','0') ") or die(mysqli_error($conn));
    echo "Your response has been recorded";
    

?>
         
