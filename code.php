<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM siswa WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $nomer = mysqli_real_escape_string($con, $_POST['nomer']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE siswa SET nama='$nama', email='$email', nomer='$nomer', course='$course' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save']))
{
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $nomer = mysqli_real_escape_string($con, $_POST['nomer']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO siswa (nama,email,nomer,course) VALUES ('$nama','$email','$nomer','$course')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['massage'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['massage'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>