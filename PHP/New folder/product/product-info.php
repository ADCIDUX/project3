<?php

if(isset($_POST['btn'])){


    require_once 'product.php';
    $product=new product();
    $product->saveProductInfo($_POST);



}

?>

<hr>
<a href="product_info.php"> add product</a>
<a href="view_product.php"> view product</a>
<hr>

<form action="" method="post">
    <table>
        <tr>
            <td>product name</td>
            <td><input type="text" name="product_name" </td>
        </tr>
        <tr>
            <td>product price</td>
            <td><input type="number" name="product_price" </td>
        </tr>
        <tr>
            <td>product quentity</td>
            <td><input type="number" name="product_quentity" </td>
        </tr>
        <tr>
            <td>product description</td>
            <td><textarea name="product_description" row="5" cols="30"></textarea></td>
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
            <td><input type="submit" name="btn" value="Save product info" </td>
        </tr>
    </table>
</form>