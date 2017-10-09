<?php
/**
 * Created by PhpStorm.
 * User: AD_CIDUX
 * Date: 9/16/2017
 * Time: 9:30 PM
 */

namespace App\classes;


class database
{

    public function db_connect(){

        $hostName = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'blog';

        mysqli_connect('localhost','root','','blog');

    }


}