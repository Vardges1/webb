<?php session_start();ini_set("display_errors", 0);?><!DOCTYPE html>
<html>
<head>
  
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <style>


.dance24{
  float:left;
  margin-top:2%;
 margin-left:2%;
  margin-right:2%;
  margin-bottom:8px;
  position:relative;
}

table, tr, td, th
{
    border: 1px solid black;
    border-collapse:collapse;
}
tr.header
{
    cursor:pointer;
}
td.header
{
    cursor:pointer;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
</head>
<body>

 
<div style="    width: 33%;    margin-left: 33%;
    border: 1px solid #FFAF35;
    border-radius: 20px;
    padding: 15px 25px;
    margin-bottom: 30px;
        margin-top: 8%;
    line-height: 1.7;">
    <div class="dws-form"> <p style="text-align:center;"> <img width="50%;" src="img/54.png"></p>
<br>
        <h2 style="text-align:center;"><label class="tab" style="color:white;text-align:center;">Войти в веб-приложение</label></h2>
   
        <form class="tab-form" method="post" action="?log">
           
          <p style="text-align:center;">  <input type="submit" value="Войти"> </p>
         </form>
 
</div>
</div>
 

  
     </div>
    




<?php 
if (isset($_GET['log'])) 
{ 
    ?><script>document.location.href="index.php"</script><?php
  }
?>

</body>
</html>