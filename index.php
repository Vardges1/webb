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


   <div style="    width: 60%;
    margin-left: 20%;
    border: 1px solid #FFAF35;
    border-radius: 20px;
    padding: 15px 25px;
    margin-bottom: 30px;
    line-height: 1.7;
    margin-top: 10%;
    ">
    <div class="dws-form">
       <h2 style="color:white;">Доброго времени суток
       ! <br> Сейчас вы можете прочитать теорию и выполнить тесты!</h2> </div>
      <h3><a href="index_el.php" style="color:white;">Электричество</a> </h3>
       <h3><a href="index_astr.php" style="color:white;">Астрофизика</a></h3>
       <h3><a href="index_mech.php" style="color:white;">Механика</a></h3>
       <h2></h2>


  
     </div>

     
     <?php



if (isset($_GET['yu'])) 
{ 
    $new_FIO = $_POST['name']; 
    $new_email = $_POST['type']; 
      $new_price = $_POST['price']; 
   
 $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }

$result_set = $mysqli->query("INSERT INTO `zay` VALUES (NULL,'$new_FIO','$new_email','$new_price',NULL,NULL,NULL,NULL,NULL,0)");
?><script>document.location.href="index.php"</script><?php
} ?>



         </div>
</div>

<?php if (($_SESSION['name']!=true) AND (($_SESSION['admin']!=true)))
   {
?> 
 

 

  
     </div>
     <?php }?>
     
     <?php



if (isset($_GET['ti'])) 
{ 
    $new_FIO = $_POST['name']; 
    $new_email = $_POST['email']; 
    $new_pass = $_POST['password']; 
     $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }

$result_set = $mysqli->query("INSERT INTO `user` VALUES (NULL,'$new_FIO','$new_email','$new_pass')");
?><script>document.location.href="index.php"</script><?php
}
 
if (isset($_GET['auth'])) 
{ 
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $d = false;    
  $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
     $result_set = $mysqli->query('SELECT * FROM user WHERE email="'.$email.'"');
     
      $row = mysqli_fetch_array($result_set);
    
     $result_set1 = $mysqli->query('SELECT * FROM admin WHERE Login="'.$email.'"');
     
      $row1 = mysqli_fetch_array($result_set1);
    
    
    
     if($email==$row1['Login'] and $login !== '')
       {
           
           if($pass==$row1['Password']){
        $_SESSION['admin'] = $email;
          
        ?><script>document.location.href="index.php"</script><?php
       
       }
       else{?><script>alert('Пароль неправильный!');</script><?php   } } 
    
     if($email==$row['email'] and $login !== '')
     {
         
     
       if($pass==$row['pass'])
       {
           $_SESSION['name'] = $email;
            $_SESSION['id'] = $row['id'];
           $_SESSION['name1'] = $row['FIO'];
        ?><script>document.location.href="index.php"</script><?php
       
       }  else{?><script>alert('Пароль неправильный!');</script><?php }
    }
    else{ ?><script>alert("Логин неправильный!");</script><?php }
    
      
      
}
if (isset($_GET['log'])) 
{ 
    $_SESSION['admin'] = false;
        $_SESSION['name'] = false;
    ?><script>document.location.href="index.php"</script><?php
  }
?>

</body>
</html>