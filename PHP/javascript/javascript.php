<!---->
<!--<script>-->
<!---->
<!---->
<!--//    document.write('hello world')-->
<!--//    document.write('hello world')-->
<!---->
<!--    alert('hello world');-->
<!---->
<!--</script>-->


<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">

    <title>java</title>

</head>
<body>


<table>
    <tr>
        <td>First name</td>
        <td><input type="text" name="First_name" id="First_name"> </td>
    </tr>


    <tr>
        <td>Last name</td>
        <td><input type="text" name="Last_name" id="Last_name"> </td>
    </tr>

    <tr>
        <td>Full name</td>
        <td><h1 id="res">  </h1></td>
    </tr>

    <tr>

        <td><input type="submit" name="btn" value="submit" onclick="make_full_name()"></td>

    </tr>



</table>




<table>
    <tr>
        <td>1st name</td>
        <td><input type="text" id="frist_name"></td>
    </tr>
    <tr>
        <td>last name</td>
        <td><input type="text" id="last_name"></td>
    </tr>

</table>
<hr/>
<table border="1" width="500" height="60px">
    <tr>
        <th>1st name</th>
        <th>last name</th>
        <th>full name</th>
    </tr>
    <tr>
        <td id="res1"></td>
        <td id="res2"></td>
        <td id="res3"></td>
    </tr>
</table>







<script>



    var frist_name=document.getElementById("frist_name");
    frist_name.onkeyup=function(){

        document.getElementById("res1").innerHTML = frist_name.value;

    };
    var last_name=document.getElementById("last_name");
    last_name.onkeyup=function(){

        document.getElementById("res2").innerHTML = last_name.value;

    };
    last_name.onblur =function(){
        document.getElementById("res3").innerHTML = frist_name.value+' '+last_name.value;

    };






       function make_full_name(){
        var x = document.getElementById('First_name').value;
        var y = document.getElementById('Last_name').value;
        var z= x+' '+y;
        document.getElementById('res').innerHTML=z;


    }

</script>







</body>
</html>