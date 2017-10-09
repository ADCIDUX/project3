<?php

class blog{
    protected $link;

    public function __construct()
    {
        $this->link = mysqli_connect('localhost','root','','blog_info');
    }

    /**
     * @return mysqli
     */
    public function queryExecute($sql , $status=NULL)
    {

        if( mysqli_query($this->link,$sql)){

            if($status){
                $queryResult =  mysqli_query($this->link,$sql);
                return $queryResult;

            }
            else{

                $message = 'blog info save successfully';
                return $message;


            }
        }
        else{
            die('Query problem'.mysqul_error($this->link));
        }


    }




    public function saveBlogInfo($data){


        $sql = "INSERT INTO BLOGS (blog_title,Author_name,Blog_description,pubclition_status) VALUES ('$data[blog_title]','$data[Author_name]','$data[Blog_description]','$data[pubclition_status]'   )";
        $massage = $this->queryExecute($sql);
        return $massage;
    }

    public function getAllBlogInfo(){
        $sql = 'SELECT * FROM BLOGS';
        $status  ='select';

        $massage = $this->queryExecute($sql ,$status);
       return $massage;

    }



    public function selectBlogInfoByBlogId($blogId)
    {
        $sql = "SELECT * FROM BLOGS WHERE id='$blogId'" ;
        $status  ='select';

        $massage = $this->queryExecute($sql ,$status);
        return $massage;





    }


    public function updateBlogInfo($data, $blogId) {

        $sql = "UPDATE blogs SET blog_title = '$data[blog_title]', Author_name = '$data[Author_name]', Blog_description ='$data[Blog_description]', pubclition_status = '$data[pubclition_status]' WHERE id = '$blogId' ";

        $this->queryExecute($sql);
            header('Location: view_blog.php');



    }


    public function deleteBlogInfo($id)
    {

        $sql = "DELETE FROM blogs WHERE id = '$id'" ;
        $this->queryExecute($sql);
        header('Location: view_blog.php');

    }



}