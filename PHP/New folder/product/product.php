<?php
/**
 * Created by PhpStorm.
 * User: AD_CIDUX
 * Date: 8/28/2017
 * Time: 8:06 PM
 */

class product
{
    protected $link;

    public function __construct()
    {
        $this->link = mysqli_connect('localhost','root','','blog_info');
    }

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
    public function saveProductInfo($data){


        $sql = "INSERT INTO products (product_name,product_price,product_quentity,product_description,pubclition_status) VALUES ('$data[product_name]','$data[product_price]','$data[product_quentity]','$data[product_description]','$data[pubclition_status]'   )";
        $massage = $this->queryExecute($sql);
        return $massage;
    }


































}