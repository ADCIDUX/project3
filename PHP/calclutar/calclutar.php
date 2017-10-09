<!---->
<!---->
<!---->
<!---->
<!--<!-- Opening a HTML Form. -->-->
<!--<form name="my_cal">-->
<!---->
<!--    Number 1: <input type="text" name="first">-->
<!--    Number 2: <input type="text" name="second">-->
<!--    Get Result: <input type="text" name="total">-->
<!---->
<!--    <input type="button" value="+" onclick="javascript:addition();">-->
<!--    <input type="button" value="-" onclick="javascript:subtraction();">-->
<!--    <input type="button" value="*" onclick="javascript:multiply();">-->
<!--    <input type="button" value="/" onclick="javascript:division();">-->
<!--    <input type="button" value="%" onclick="javascript:modulus();">-->
<!--</form>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--<script language="javascript" type="text/javascript">-->
<!--    function addition(){-->
<!--        a=Number(document.my_cal.first.value);-->
<!--        b=Number(document.my_cal.second.value);-->
<!--        c=a+b;-->
<!--        document.my_cal.total.value=c;-->
<!--    }-->
<!--</script>-->
<!---->
<!--<script language="javascript" type="text/javascript">-->
<!--    function subtraction(){-->
<!--        a=Number(document.my_cal.first.value);-->
<!--        b=Number(document.my_cal.second.value);-->
<!--        c=a-b;-->
<!--        document.my_cal.total.value=c;-->
<!--    }-->
<!--</script>-->
<!---->
<!--<script language="javascript" type="text/javascript">-->
<!--    function multiply(){-->
<!--        a=Number(document.my_cal.first.value);-->
<!--        b=Number(document.my_cal.second.value);-->
<!--        c=a*b;-->
<!--        document.my_cal.total.value=c;-->
<!--    }-->
<!--</script>-->
<!---->
<!--<script language="javascript" type="text/javascript">-->
<!--    function division(){-->
<!--        a=Number(document.my_cal.first.value);-->
<!--        b=Number(document.my_cal.second.value);-->
<!--        c=a/b;-->
<!--        document.my_cal.total.value=c;-->
<!--    }-->
<!--</script>-->
<!---->
<!--<script language="javascript" type="text/javascript">-->
<!--    function modulus(){-->
<!--        a=Number(document.my_cal.first.value);-->
<!--        b=Number(document.my_cal.second.value);-->
<!--        c=a%b;-->
<!--        document.my_cal.total.value=c;-->
<!--    }-->
<!--</script>-->
<!---->
<!---->
<?php
?>
<!--<style>-->
<!--    .main-div{-->
<!--        width:500px;-->
<!--        height: 400px;-->
<!--        border: 1px solid;-->
<!--    }-->
<!--</style>-->
<!---->
<!--<div class="main-div" id="mainDiv"></div>-->
<!---->
<!--<button type="button" id="blackBtn">black</button>-->
<!--<button type="button" id="greenBtn">green</button>-->
<!--<button type="button" id="redBtn">red</button>-->
<!--<button type="button" id="blueBtn">blue</button>-->
<!--<button type="button" id="defultBtn">defult</button>-->
<!---->
<!---->
<!--<script>-->
<!-- var blackBtnElement = document.getElementById("blackBtn");-->
<!-- blackBtnElement.onclick = function(){-->
<!---->
<!--   var mainDiv = document.getElementById("mainDiv");-->
<!--   mainDiv.style.backgroundColor = "black";-->
<!---->
<!-- }-->
<!---->
<!-- var redBtnElement = document.getElementById("redBtn");-->
<!-- redBtnElement.onclick = function(){-->
<!---->
<!--     var mainDiv = document.getElementById("mainDiv");-->
<!--     mainDiv.style.backgroundColor = "red";-->
<!---->
<!-- }-->
<!-- var greenBtnElement = document.getElementById("greenBtn");-->
<!-- greenBtnElement.onclick = function(){-->
<!---->
<!--     var mainDiv = document.getElementById("mainDiv");-->
<!--     mainDiv.style.backgroundColor = "green";-->
<!---->
<!-- }-->
<!---->
<!-- var defultBtnElement = document.getElementById("defultBtn");-->
<!-- defultBtnElement.onclick = function(){-->
<!---->
<!--     var mainDiv = document.getElementById("mainDiv");-->
<!--     mainDiv.style.backgroundColor = "white";-->
<!---->
<!-- }-->
<!---->
<!-- var blueBtnElement = document.getElementById("blueBtn");-->
<!-- blueBtnElement.onclick = function(){-->
<!---->
<!--     var mainDiv = document.getElementById("mainDiv");-->
<!--     mainDiv.style.backgroundColor = "blue";-->
<!---->
<!-- }-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--</script>-->



<table>
    <tr>
        <td>Enter ur element width</td>
        <td><input type="number" id="width"></td>
    </tr>
    <tr>
        <td>Enter ur element height</td>
        <td><input type="number" id="height"></td>
    </tr>
    <tr>
        <td>Enter ur element background color</td>
        <td><input type="color" id="backgroundColor"></td>
    </tr>
    <tr>
        <td>Enter ur element border radius</td>
        <td><input type="number" id="borderRadius"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" id="submit" value="submit"></td>
    </tr>

</table>
<hr>
<span>your element is:</span>
<hr>


<div id="divOne"></div>




<script>
    var submitElement=document.getElementById('submit');
    submitElement.onclick=function(){
        var width =document.getElementById('width').value;
        var height =document.getElementById('height').value;
        var backgroundColor =document.getElementById('backgroundColor').value;
        var borderRadius =document.getElementById('borderRadius').value;

        var divOne =document.getElementById('divOne');
        divOne.style.width=width+'px';
        divOne.style.height=height+'px';
        divOne.style.backgroundColor=backgroundColor;
        divOne.style.borderRadius=borderRadius+'px';
    };
</script>


