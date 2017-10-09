<?php

$blogId = $_GET['id'];

require_once 'blog.php';
$blog=new Blog();
 $queryResult  = $blog->selectBlogInfoByBlogId($blogId);
 $blogInfo = mysqli_fetch_assoc($queryResult);

if($_POST['btn']) {
    $blog->updateBlogInfo($_POST, $blogId);
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
            <td><input type="text" name="blog_title" value="<?php echo $blogInfo['blog_title'] ?>" </td>
        </tr>
        <tr>
            <td>Author name</td>
            <td><input type="text" name="Author_name" value="<?php echo $blogInfo['Author_name'] ?>"> </td>
        </tr>
        <tr>
            <td>Blog description</td>
            <td><textarea name="Blog_description" row="5" cols="30" ><?php echo $blogInfo['Blog_description'] ?></textarea></td>
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
            <td><input type="submit" name="btn" value="Update Blog Info" </td>
        </tr>
    </table>
</form>

<script>
    document.forms['editBlog'].elements['pubclition_status'].value = '<?php echo $blog_info['pubclition_status']; ?>';
</script>
