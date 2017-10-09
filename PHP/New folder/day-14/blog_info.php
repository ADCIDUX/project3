<?php

if(isset($_POST['btn'])){


    require_once 'blog.php';
    $blog=new Blog();
    $blog->saveBlogInfo($_POST);



}

?>

<hr>
<a href="blog_info.php"> add blog</a>
<a href="view_blog.php"> view blog</a>
<hr>

<form action="" method="post">
    <table>
        <tr>
            <td>Blog title</td>
            <td><input type="text" name="blog_title" </td>
        </tr>
        <tr>
            <td>Author name</td>
            <td><input type="text" name="Author_name" </td>
        </tr>
        <tr>
            <td>Blog description</td>
            <td><textarea name="Blog_description" row="5" cols="30"></textarea></td>
        </tr>
        <tr>
            <td>pubclition status</td>
            <td>
                <select name="pubclition_status">
                    <option value="1">publishd</option>
                    <option value="0">unpublished</option>

                </select>

            </td>
        </tr>

        <tr>
            <td><input type="submit" name="btn" value="Save Blog info" </td>
        </tr>
    </table>
</form>