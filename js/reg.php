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
body{ background-image: url(/led.jpg);}

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


<?php if ($_SESSION['name']==true)
   { ?>
   <div style="    width: 60%;
    margin-left: 20%;
    border: 1px solid #FFAF35;
    border-radius: 20px;
    padding: 15px 25px;
    margin-bottom: 30px;
    line-height: 1.7;">
    <div class="dws-form">
       <p>Доброго времени суток, <?php echo ($_SESSION['name1']); ?>
        </div>
    
       

   <form class="tab-form" method="post" action="?log">
         
            <input type="submit" value="Выйти">
         </form>
   </div>
  
     
     <?php }?>
     
     


<?php if (($_SESSION['name']!=true))
   {
?> 
 
<div style="   margin-top: 12%; width: 33%;
    margin-left: 33%;
    border: 1px solid #FFAF35;
    border-radius: 20px;
    padding: 15px 25px;
    margin-bottom: 30px;
    line-height: 1.7;">
        <div class="dws-form">
      <label>Регистрация</label>
         <form action="?ti" method="post" enctype="multipart/form-data" class="tab-form">
            <input type="hidden" name="id">
            <input type="text" name="email" placeholder="Введите логин">
            <input type="password" name="password" placeholder="Введите пароль">
            <input type="submit" value="Зарегистрироваться">
         </form>

     </div>   </div>
  
     </div>
     <?php }?>
     
     <?php



if (isset($_GET['ti'])) 
{ 
 
    $new_email = $_POST['email']; 
    $new_pass = $_POST['password']; 
     $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }

$result_set = $mysqli->query("INSERT INTO `user` VALUES (NULL,'L','$new_email','$new_pass')");
          $_SESSION['name'] = $new_email;
            $_SESSION['id'] = 1;
        ?><script>document.location.href="cab.php"</script><?php
}
 

if (isset($_GET['log'])) 
{ 
 
        $_SESSION['name'] = false;
    ?><script>document.location.href="main.php"</script><?php
  }
?>

</body>
</html>