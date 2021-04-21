<?php session_start();ini_set("display_errors", 0);?><!DOCTYPE html>
<html>
<head>
  
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <style>
body{ background-image: url(/led.jpg);}

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

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
</head>
<body>

<h2> Доброго времени суток,здесь вы можете добавить заявку на лот</h2>
<form action="?ti" method="post" enctype="multipart/form-data" style="margin-top:3%;
margin-left:40%;
margin-right:40%;">
      
    <table>

<tr>
</tr>

<tr>
<td>Ваша цена</td>
<td><input type="hidden" name="t" value="<?php print_r($_GET['id']);?>">
  <input type="text" name="price"></td>
</tr>
</table>
<button>Изменить</button>

      </form>


<?php

if (isset($_GET['ti'])) 

{ 
    $new_id = $_POST['t'];   
    $new_price = $_POST['price']; 
    $user_id = $_SESSION['id'];

 $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
      $result_set10 = $mysqli->query('SELECT * FROM zay WHERE id_zay="'.$new_id.'"');
      $row10 = mysqli_fetch_array($result_set10);
       if($row10['Raise']==1) {
           
      $result_set9 = $mysqli->query('SELECT MAX(cost) as cost FROM user_zay WHERE id_zay="'.$new_id.'"');
      $row9 = mysqli_fetch_array($result_set9);
      if ($row9['cost']>$new_price OR $row10['Start']>$new_price)
      {
        ?><script>alert('Вы должны установить цену выше максимальной ставки предложенной другими участниками торгов и выше начальной ставки!');</script><?php 
      }
      else { $result_set = $mysqli->query("INSERT INTO `user_zay` VALUES ('$user_id','$new_id','$new_price')");
      $result_set13 = $mysqli->query('UPDATE `zay` SET High="'.$new_price.'" WHERE id_zay="'.$new_id.'"');
?><script>document.location.href="index.php"</script> <?php }


       }
       else{
 
      $result_set9 = $mysqli->query('SELECT MIN(cost) as cost FROM user_zay WHERE id_zay="'.$new_id.'"');
      $row9 = mysqli_fetch_array($result_set9);
      if ($row9['cost']!=NULL){
      if ($row9['cost']<$new_price OR $row10['Start']<$new_price)
      {
        ?><script>alert('Вы должны установить цену ниже минимальной ставки предложенной другими участниками торгов!');</script><?php 
      }
      else { $result_set = $mysqli->query("INSERT INTO `user_zay` VALUES ('$user_id','$new_id','$new_price')");
       $result_set13 = $mysqli->query('UPDATE `zay` SET High="'.$new_price.'" WHERE id_zay="'.$new_id.'"');
?><script>document.location.href="index.php"</script> <?php }

       }
       else{$result_set = $mysqli->query("INSERT INTO `user_zay` VALUES ('$user_id','$new_id','$new_price')");
       $result_set13 = $mysqli->query('UPDATE `zay` SET High="'.$new_price.'" WHERE id_zay="'.$new_id.'"');
?><script>document.location.href="index.php"</script> <?php }

     }

 }
?>



<div><a href="index.php"><h2>Выход</h2></a></div>

</body>
</html>