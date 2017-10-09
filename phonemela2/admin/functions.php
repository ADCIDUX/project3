<?php

function admin_login_check($data) {
    require './db_connect.php';
    $password=md5($data['password']);
    $sql="SELECT * FROM admin WHERE email_address= '$data[email_address]' AND password='$password' ";
    $query_result=mysqli_query($con, $sql);
    $admin_info=mysqli_fetch_assoc($query_result);
//    echo '<pre>';
//    print_r($admin_info);
//    exit();
    if($admin_info) {
        session_start();
        
        $_SESSION['admin_id']=$admin_info['admin_id'];
        $_SESSION['admin_name']=$admin_info['admin_name'];
        
        header('Location: admin_master.php');
    } else {
        $message="Please use valid email address & password";
        return $message;
    }
}
function admin_logout() {
    unset($_SESSION['admin_id']);
    unset($_SESSION['admin_name']);
    
    header('Location: index.php');
}



