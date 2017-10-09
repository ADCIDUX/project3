<?php

if(isset($_POST['btn'])){


    require_once 'Student.php';
    $student=new Student();
    $student->saveStudentInfo($_POST);



}

?>

<hr>
<a href="day-13.php"> add student</a>
<a href="view student.php"> view student</a>
<hr>

<form action="" method="post">
    <table>
        <tr>
            <td>Student name</td>
            <td><input type="name" name="student_name" </td>
        </tr>
        <tr>
            <td>Phone number</td>
            <td><input type="number" name="phone_number" </td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td><input type="email" name="email_address" </td>
        </tr>
        <tr>
            <td><input type="submit" name="btn" value="Save stusent info" </td>
        </tr>
    </table>
</form>