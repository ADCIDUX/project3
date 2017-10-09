<?php

class Student{
    protected $link;

    public function __construct()
    {
       $this->link = mysqli_connect('localhost','root','','bitm_php_64');
    }



    public function saveStudentInfo($data){

 $sql = "INSERT INTO students (student_name,phone_number,email_address) VALUES ('$data[student_name]','$data[phone_number]','$data[email_address]')";

    if( mysqli_query($this->link,$sql)){
        $message = 'student info save successfully';
        echo $message;

    }
    else{
        die('Query problem'.mysqul_error($this->link));
    }
}

public function getAllStudentInfo(){
$sql = 'SELECT * FROM STUDENTS';
if( mysqli_query($this->link,$sql)){

        $queryResult =  mysqli_query($this->link,$sql);
       return $queryResult;
    }
    else{
        die('Query problem'.mysqul_error($this->link));
    }
}


}