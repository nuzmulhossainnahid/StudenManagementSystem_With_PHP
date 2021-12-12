<?php

require_once '../vendor/autoload.php';
use App\classes\Student;
use App\classes\Auth;

if (isset($_POST['btn']))
{
    $student = new Student($_POST, $_FILES);
    $message = $student->save();
    include "home.php";
}
else if(isset($_GET['status']))
{
    if($_GET['status'] == 'manage')
    {
        $student  = new Student();
        $students = $student->getAllStudentInfo();
        include 'manage.php';
    }else if($_GET['status'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
}
else if(isset($_GET['delete']))
{
    $student = new Student();
    $student->delete($_GET['delete']);
}
else if(isset($_GET['edit']))
{
    $student = new Student();
    $studentInfo = $student->getStudentInfoById($_GET['edit']);
    include 'edit.php';
}
else if(isset($_POST['updateBtn']))
{
    $student    = new Student($_POST, $_FILES);
    $studentInfo = $student->getStudentInfoById($_POST['id']);
    $message    = $student->updateStudentInfo($studentInfo);
    $students   = $student->getAllStudentInfo();
    include 'manage.php';
}else if(isset($_POST['loginBtn']))
{
    $auth = new Auth($_POST);
  $message =  $auth->login();
  include 'login.php';
}