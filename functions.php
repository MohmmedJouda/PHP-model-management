<?php
include('conn.php');
$conn=new conn();
if(isset($_POST['type']) && $_POST['type'] =="add_teacher"){
    $conn->addTeacher($_POST['name'],$_POST['email'],$_POST['password']);
    header('Location: teachers.php');
}
if(isset($_GET['type']) && $_GET['type'] =="delete_teacher"){
    $conn->deleteTeacher($_GET['id']);
    header('Location: teachers.php');
}
if(isset($_POST['type']) && $_POST['type'] =="update_teacher"){
    $conn->updateTeacher($_POST['name'],$_POST['email'],$_POST['password'],$_POST['id']);
    header('Location: teachers.php');
}
/********************* student ***************************/
if(isset($_POST['type']) && $_POST['type'] =="add_student"){
    $conn->addStudent($_POST['name'],$_POST['email'],$_POST['password'],$_POST['avg']);
    header('Location: students.php');
}
if(isset($_POST['type']) && $_POST['type'] =="update_student"){
    $conn->updateStudent($_POST['name'],$_POST['email'],$_POST['password'],$_POST['avg'],$_POST['id']);
    header('Location: students.php');
}
if(isset($_GET['type']) && $_GET['type'] =="delete_student"){
    $conn->deleteStudent($_GET['id']);
    header('Location: students.php');
}
/********************* question ***************************/
if(isset($_POST['type']) && $_POST['type'] =="add_question"){
    $conn->addQuestion($_POST['title'],$_POST['degree'],$_POST['correct_answer'],$_POST['answer']);
    header('Location: questions.php');
}
if(isset($_POST['type']) && $_POST['type'] =="update_question"){
    $conn->updateQuestion($_POST['title'],$_POST['degree'],$_POST['correct_answer'],$_POST['answer'],$_POST['id']);
    header('Location: questions.php');
}
if(isset($_GET['type']) && $_GET['type'] =="delete_question"){
    $conn->deleteQuestion($_GET['id']);
    header('Location: questions.php');
}

/********************* course ***************************/
if(isset($_POST['type']) && $_POST['type'] =="add_course"){
    $conn->addcourse($_POST['name'],$_POST['email'],$_POST['password']);
    header('Location: courses.php');
}

if(isset($_POST['type']) && $_POST['type'] =="update_course"){
    $conn->updatecourse($_POST['name'],$_POST['id']);
    header('Location: courses.php');
}

if(isset($_GET['type']) && $_GET['type'] =="delete_course"){
    $conn->deletecourse($_GET['id']);
    header('Location: courses.php');
}