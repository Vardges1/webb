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


<?php

 if ($_SESSION['admin']==true)
   { ?> 
    
<div style="    width: 60%;
    margin-left: 20%;
    border: 1px solid #FFAF35;
    border-radius: 20px;
    padding: 15px 25px;
    margin-bottom: 30px;
    line-height: 1.7;">
    <div class="dws-form">
   <p> Добрый День, Руководитель, вам необходимо потдтвердить добавление лотов в систему</p>
    
    <table border="1">
<tr> 
<td> <?php
?> <p> Название лота </p> </td>
<td> <p> Стартовая цена </p> </td>
<td> <p>  </p> </td>

<tr>
 <?php
 $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }

 $result_set43 = $mysqli->query('SELECT * FROM zay WHERE adm=0');
 while($row19 = mysqli_fetch_array($result_set43)) {

          ?><td> <p><?php print_r(" ".$row19['Name']);?>
            
          </p></td><td>   <p><?php print_r(" ".$row19['Start']);?>
            
          </p></td>
          <td> <a style="text-decoration: none;"href="index5_auk.php?id=<?php print_r($row19['id_zay']);?>" id="card-link-click">Добавить лот в систему</a> </td>
 </tr>
           <?php
         } ?>
     </table>
   <form class="tab-form" method="post" action="?log">
         
            <input type="submit" value="Выйти">
         </form>
         </div>
</div>
   
   <?php
   
   }
   
   if ($_SESSION['man']==true)
   { ?> 
    
<div style="    width: 60%;
    margin-left: 20%;
    border: 1px solid #FFAF35;
    border-radius: 20px;
    padding: 15px 25px;
    margin-bottom: 30px;
    line-height: 1.7;">
    <div class="dws-form">
   <p> Добрый День, менеджер, вы можете добавлять лоты</p>
    <div style="    width: 60%;
    margin-left: 20%;
    border: 1px solid #FFAF35;
    border-radius: 20px;
    padding: 15px 25px;
    margin-bottom: 30px;
    line-height: 1.7;">
        <div class="dws-form">
      <label>Добавить лот в аукцион</label>
         <form action="?yu" method="post" enctype="multipart/form-data" class="tab-form">
            <input type="hidden" name="id">
            <input type="text" name="name" placeholder="Введите наименование лота">
            <input type="text" name="type" placeholder="Введите тип лота">
             <input type="text" name="price" placeholder="Введите стартовую цену">
        
            <input type="submit" value="Добавить лот">
         </form>

     </div>   </div>
   
   <form class="tab-form" method="post" action="?log">
         
            <input type="submit" value="Выйти">
         </form>
         </div>
</div>
   
   <?php
   
   }
   
   
   
   ?>  
   
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
       ! <br> Сейчас вы можете просмотреть лоты и оставить заявки на покупку</p> </div>
       <p>Лоты:</p> 
       <table border="1">
<tr> 
<td> <?php
?> <p> Название лота </p> </td>
<td> <p> Стартовая цена </p> </td>
<td> <p> Время до которого длится аукцион </p> </td>
<td> <p> Поданные заявки </p> </td>
<td> <p> Торги на </p> </td>
<td> <p> Максимальная/минимальная ставка </p> </td>
<td> <p> Подача завяки </p> </td>
<tr>
    <tbody>  
       <?php
 $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  $email = $_SESSION['name'];


          $date = date('Y-m-d H:i:s');

         $result_set13 = $mysqli->query('UPDATE `zay` SET Pub=0, pok=1 WHERE timee<"'.$date.'"');
  
         $result_set = $mysqli->query('SELECT * FROM zay WHERE Pub=1 AND pok=0 AND adm=1');
    
  
while($row = mysqli_fetch_array($result_set)){
     $result_set1 = $mysqli->query('SELECT * FROM user_zay WHERE id_zay="'.$row['id_zay'].'" and id="'.$_SESSION['id'].'"');
    
     $row1 = mysqli_fetch_array($result_set1);

     ?><tr> <td><p><?php print_r(" ".$row['Name']);?></p> </td> <?php 
     ?><td><p><?php print_r(" ".$row['Start']);?></p></td><?php 

       ?><td><p><?php print_r(" ".$row['timee']);?></p></td>


       <td>

        <?php 

     $result_set2 = $mysqli->query('SELECT * FROM user_zay WHERE id_zay="'.$row['id_zay'].'"');
while($row2 = mysqli_fetch_array($result_set2)){
       print_r(" Цена - ".$row2['cost']);}?>
         


       </td>


            <td><?php 

     $result_set10 = $mysqli->query('SELECT Raise FROM zay WHERE id_zay="'.$row['id_zay'].'"');
      $row10 = mysqli_fetch_array($result_set10);
       if($row10['Raise']==1) { print_r(" Торги на повышение");


?>
</td><td><?php 

     $result_set9 = $mysqli->query('SELECT MAX(cost) as cost FROM user_zay WHERE id_zay="'.$row['id_zay'].'"');
      $row9 = mysqli_fetch_array($result_set9);
       print_r(" Максимальная цена - ".$row9['cost']);
       ?>
         
       </td>

    <?php }
       else {  print_r(" Торги на понижение");


?>
<td><?php 

     $result_set9 = $mysqli->query('SELECT MIN(cost) as cost FROM user_zay WHERE id_zay="'.$row['id_zay'].'"');
      $row9 = mysqli_fetch_array($result_set9);
       print_r(" Минимальная цена - ".$row9['cost']);
       ?>
         
       </td>
<?php } ?>

         

<td>
<?php if($row1['id']==NULL){?> <a style="text-decoration: none;"href="index4_auk.php?id=<?php print_r($row['id_zay']);?>" id="card-link-click">Подать заявку на лот</a>

       <?php }
}
?></td></tr>
</tbody></table>

   <form class="tab-form" method="post" action="?log">
         
            <input type="submit" value="Выйти">
         </form><div><a href="index3_auk.php"><h2>Посмотреть лоты которые были приобретены</h2></a></div>



  
     </div>
     <?php }?>
     
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
?><script>document.location.href="index_auk.php"</script><?php
} ?>



         </div>
</div>

<?php if (($_SESSION['name']!=true) AND (($_SESSION['admin']!=true)) AND (($_SESSION['man']!=true)))
   {
?> 
 
<div style="    width: 33%;    margin-left: 33%;
    border: 1px solid #FFAF35;
    border-radius: 20px;
    padding: 15px 25px;
    margin-bottom: 30px;
    line-height: 1.7;">
    <div class="dws-form">
        <label class="tab" title="Вкладка 1">Авторизация</label>
     

        <form class="tab-form" method="post" action="?auth">
            <input type="text" name="email" placeholder="Введите E-mail">
            <input type="password" name="password" placeholder="Введите пароль">
            <input type="submit" value="Войти">
         </form>
 
</div>
</div>
 
<div style="    width: 33%;
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
            <input type="email" name="email" placeholder="Введите E-mail адрес">
            <input type="text" name="name" placeholder="Введите свое имя">
            <input type="password" name="password" placeholder="Введите пароль">
            <input type="submit" value="Зарегистрироваться">
         </form>

     </div>   </div>
  
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
?><script>document.location.href="index_auk.php"</script><?php
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
    
    $result_set2 = $mysqli->query('SELECT * FROM manager WHERE email="'.$email.'"');
     
      $row2 = mysqli_fetch_array($result_set2);
    
    
    
    
    if($email==$row2['email'] and $login !== '')
       {
           
           if($pass==$row2['password']){
        $_SESSION['man'] = $email;
          
        ?><script>document.location.href="index_auk.php"</script><?php
       
       }
       else{?><script>alert('Пароль неправильный!');</script><?php   } }
    
    
     if($email==$row1['Login'] and $login !== '')
       {
           
           if($pass==$row1['Password']){
        $_SESSION['admin'] = $email;
          
        ?><script>document.location.href="index_auk.php"</script><?php
       
       }
       else{?><script>alert('Пароль неправильный!');</script><?php   } } 
    
     if($email==$row['email'] and $login !== '')
     {
         
     
       if($pass==$row['pass'])
       {
           $_SESSION['name'] = $email;
            $_SESSION['id'] = $row['id'];
           $_SESSION['name1'] = $row['FIO'];
        ?><script>document.location.href="index_auk.php"</script><?php
       
       }  else{?><script>alert('Пароль неправильный!');</script><?php }
    }
    else{ ?><script>alert("Логин неправильный!");</script><?php }
    
      
      
}
if (isset($_GET['log'])) 
{ 
    $_SESSION['admin'] = false;
        $_SESSION['name'] = false;
              $_SESSION['man'] = false;
    ?><script>document.location.href="index_auk.php"</script><?php
  }
?>

</body>
</html>