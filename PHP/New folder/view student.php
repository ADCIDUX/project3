<?php
require_once 'Student.php';
$student=new Student();
$queryResult = $student->getAllStudentInfo();
?>
<hr>
<a href="day-13.php"> add student</a>
<a href="view student.php"> view student</a>
<hr>


<table border="1px">
    <tr>
        <td>student ID</td>
        <td>student name</td>
         <td>phone number</td>
        <td>email address</td>

    </tr>
    <?php while ($student = mysqli_fetch_assoc($queryResult)){ ?>

    <tr>
        <td><?php echo $student['id'] ?>  </td>
        <td><?php echo $student['student_name'] ?></td>
        <td><?php echo $student['phone_number'] ?></td>
        <td><?php echo $student['email_address'] ?></td>

    </tr>
    <?php } ?>
</table>