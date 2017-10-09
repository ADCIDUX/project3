<?php
require_once 'blog.php';
$blog=new blog();
$queryResult = $blog->getAllBlogInfo();

if(isset($_GET['status'])){
    $id = $_GET['id'];
    $blog->deleteBlogInfo($id);


}


?>
<hr>
<a href="blog_info.php"> add blog</a>
<a href="view_blog.php"> view blog</a>
<hr>

<table border="1px">
    <tr>
        <td>blog ID</td>
        <td>blog_title</td>
        <td>Author_name</td>
        <td>Blog_description</td>
        <td>pubclition_status</td>
        <td>action</td>

    </tr>
    <?php while ($blog = mysqli_fetch_assoc($queryResult)){ ?>

        <tr>
            <td><?php echo $blog['id'] ?>  </td>
            <td><?php echo $blog['blog_title'] ?></td>
            <td><?php echo $blog['Author_name'] ?></td>
            <td><?php echo $blog['Blog_description'] ?></td>
            <td><?php echo $blog['pubclition_status']== 1 ? 'published':'unpublished' ?></td>
            <td>
                <a href="edit_blog.php?id=<?php echo $blog['id'] ?>"> edit blog</a>||
                <a href="?status=delete&id=<?php echo $blog['id'] ?>" onclick="return confirm('are u sure to delete this!!');"> delete blog</a>
            </td>
        </tr>
    <?php } ?>
</table>