<?php
//
//
//
//class Demo {
//	public $name='Hello World';
//
//
//	function add(){
//		echo 'in add';
//	}
//}
//
//$obj_demo = new Demo();
//echo $Obj_Demo->name;
//
//

?>
<?php


     function makeFullName(){
     $First_name= $_POST['First_name'];
 $Last_name= $_POST['Last_name'];
 $Full_name = $First_name.''.$Last_name;
 return $Full_name;

     }


?>



<from>
    <table>
        <tr>
            <td>First mame</td>
            <td><input type="text" name="First_name" </td>
        </tr>
        <tr>
            <td>last mame</td>
            <td><input type="text" name="Last_name" </td>
        </tr>
        <tr>
            <td>Full mame</td>
            <td><input type="text" name="Full_name" </td>
        </tr>
        <tr>
            <td><input type="submit" name="btn" </td>
        </tr>
    </table>
</from>


<?php

function fullNumber(){
    $First_number = $_POST ['First_number'];
    $Last_number = $_POST ['Last_number'];
     $Full_number=0;

    for ($i=$First_number; $i<=$Last_number; $i++  ){
        $Full_number+=$i;
    }
return Full_number;


}




?>







<form>
    <table>
        <tr>
            <td>First number</td>
            <td><input type="number" name="First_number" </td>
        </tr>
        <tr>
            <td>last number</td>
            <td><input type="number" name="Last_number" </td>
        </tr>
        <tr>
            <td>Full number</td>
            <td><input type="number" name="Full_number" </td>
        </tr>
        <tr>
            <td><input type="submit" name="btn" value="<?php echo $Full_number ?>" </td>
        </tr>
    </table>
</form>
