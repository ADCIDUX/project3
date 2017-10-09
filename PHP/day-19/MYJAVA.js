
$('#First-name').blur(function(){

   var firstName = $('#First-name').val();
   if(firstName.length>10 || firstName.length<20){
       $('#first_name_error').text('first name must be 10 to 20 charcter');

   }
    else {

       $('#first_name_error').text();
   }


});













// $(':input').each(function () {
//     alert($(this).val());
// });
//
// $('input').each(function () {
//     alert($(this).val());
// });

//$('.demo').css('background-color','red');
// $('table td').each(function () {
//     alert($(this).text());
//
// });

//$('h1').css('color','red');
// $('#divOne').css('border','1px solid red');
//
// $('.demo').css({
//     'color':'red',
//     'border':'1px solid',
//
// });
//
// alert ($('table').text())
