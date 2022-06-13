<?php

$username   = '';
$password   = '';
$student_number = '';

if (strlen($_POST['username']) > 2 && strlen($_POST['password']) > 2 && preg_match('/^[a,A][0][0-9]{7}/i', $_POST['student_number'])) {
    $username   = trim($_POST['username']);
    $password   = $_POST['password'];
    $studentNumber  = trim($_POST['student_number']);
} else {
    echo "Something was entered incorrectly, please try again :)";
    exit;
}
if (isset($_POST["male"])) {
    echo "hello Mr " . $username;
}
if (isset($_POST["female"])) {
    echo "hello Ms " . $username;
}
if (isset($_POST["otherx"])) {
    echo "hello " . $username;
}
if (!empty($_POST['check_list'])) {
    // Counting number of checked checkboxes.
    $checked_count = count($_POST['check_list']);
    if ($checked_count > 2) {
        foreach ($_POST['check_list'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
        echo "You are multilingual";
    }
    if ($checked_count >= 5) {
        echo "Impressive. You have been studying quite a few computing languages";
    } else {
        echo "You are not studying any computer language(s)";
    }
}
