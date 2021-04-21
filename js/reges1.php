<?php session_start();ini_set("display_errors", 0);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
           	<title>Диагностика по симптомам</title>
	<meta name="description" content="Диагностика по симптомам">
	<meta name="keywords" content="">
	
	<link href="./Диагностика по симптомам_files/style.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" async="" src="./Диагностика по симптомам_files/tag.js"></script><script type="text/javascript" src="./Диагностика по симптомам_files/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="./Диагностика по симптомам_files/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./Диагностика по симптомам_files/tooltip.js"></script>
    <script type="text/javascript" src="./Диагностика по симптомам_files/redactor.js"></script>
  
    
    <meta name="google-site-verification" content="WvjGNUZmFCHvbouiF-fdWU2JYHFbkbZjLbVSqhZ6PBE">
	<style>
.reg	{margin-right:20%;margin-left:34%; margin-top: 0%;}
	    
	     @media (max-width: 1000px){
.reg{
margin-right:20%;margin-left:22%; margin-top: 0%;
   }
}
	</style>
    <meta name="ahrefs-site-verification" content="e9a21a1103624b3b0c758ee6508ed41ae2a10fb515e37f414060aedbf66e688b">
	

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

   
    
    <div class="reg"
    
  
    ">

  <div id="main">
   <?php
if ($_SESSION['admin']==true)
   { ?> 
    <div class="news-card">
    <div class="dws-form">
   <p> Добрый День, администратор, вы можете добавить категории, симптомы и болезни</p>
     
  
   <p>
       
       <?php
      
 $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }

//Выбираем из БД все самолеты 
    $result_set54 = $mysqli->query("SELECT * FROM simptoms");
    //Ниже представлена форма с помощью которой админ может добавить рейс
?>
   </p>
  
    <form method="post" action="?add">
        <h2>Добавить категорию</h2>
        <p> Название категории <input name="cat" type="text">
        <input type="submit" value="Добавить">
   </form>
     
<form method="post" action="?adds">
    <h2>Добавить симптом</h2>
     <p> Название симптома <input name="cat" type="text"></p>
  <p> Выберите, в какую категорию отнести симптом:<select size="3" name="stol">   <option disabled>Выберите категори</option><?php  while($row = mysqli_fetch_array($result_set54)){
      
?>
    <option value="<?php echo $row['id_simp'];?>" selected><?php echo $row['name'];?></option>
<?php } ?>  
   </select>

   <br>

   <input type="submit" value="Добавить">
   </form>
   
   <form method="post" action="?addsi">
    <h2>Добавить болезнь</h2>
     <p> Название болезни <input name="cat" type="text"></p>
  <p> Выберите симптомы болезни:     <?php 

$result_set = $mysqli->query('SELECT * FROM category');
     
while($row = mysqli_fetch_array($result_set)) { ?>
            <div class="type_box">
                <form method="post" action="?sim">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#type_box_<?php echo($row['id_cat']);?>").hide();
                                    $("#type_<?php echo($row['id_cat']);?>").click(function(){	
            							$("#type_box_<?php echo($row['id_cat']);?>").slideToggle();	
            						}); 
                                });
                            </script>
                            
            <p id="type_<?php echo($row['id_cat']);?>" class="type_main_title"><?php echo($row['name']);?></p>
           
            
            
  <?php
$result_set1 = $mysqli->query('SELECT * FROM simptoms WHERE id_cat="'.$row['id_cat'].'"');
//while($row1 = mysqli_fetch_array($result_set1)){echo($row1['id_cat']);}
?><div id="type_box_<?php echo($row['id_cat']);?>" style="display: none;">  <?php   
while($row1 = mysqli_fetch_array($result_set1)) {
?>            
 
<input class="type_checkbox" type="checkbox" id="<?php echo($row1['id_simp']);?>" name="f[]" value="<?php echo($row1['id_simp']);?>" title="Выбрать симптом"/><p> <?php echo($row1['name']); ?></p>
 
<?php } ?>
 </div></div>
      <?php } ?>

   <br>

   <input type="submit" value="Добавить">
   </form>
   <?php if (isset($_GET['add'])) 
{ 
     $id_air = $_POST['stol'];
$cal = $_POST['calendar'];
    $city1 = $_POST['city1'];
$city2 = $_POST['city2'];
  
    $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }


    $result_set = $mysqli->query("INSERT INTO `flight` VALUES (NULL,'$cal','$city1','$city2','$id_air',200)");
    ?><script>alert("Рейс добавлен!");</script>
    <script>document.location.href="reges.php"
    </script><?php
    }

?>
   
    <?php 
    ?>
   <form class="tab-form" method="post" action="?log">
         
            <input type="submit" value="Выйти">
         </form>
         </div>
</div>
   
   <?php
   
   } ?>  
   <?php if ($_SESSION['admin']!=true)
   {
?> 
<div class="news-card">
    <div class="dws-form">
        <label class="tab" style="font-size:41%;" title="Вкладка 1">Авторизация</label>
     

        <form class="tab-form" method="post" action="?auth">
            <input type="text" name="email" placeholder="Введите E-mail">
            <input type="password" name="password" placeholder="Введите пароль">
            <input type="submit" value="Войти">
         </form>
 
</div>
</div>

  
     
     
     <?php }
     ?>
   <div class="news-card">
    <div class="dws-form">
        <?php 
        
        $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
        ?>
<div id="main">
    
    <div class="text_main">
   
        <div id="diagnost_left">
         <?php 

$result_set = $mysqli->query('SELECT * FROM category');
     
while($row = mysqli_fetch_array($result_set)) { ?>
            <div class="type_box">
                <form method="post" action="?sim">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#type_box_<?php echo($row['id_cat']);?>").hide();
                                    $("#type_<?php echo($row['id_cat']);?>").click(function(){	
            							$("#type_box_<?php echo($row['id_cat']);?>").slideToggle();	
            						}); 
                                });
                            </script>
                            
            <p id="type_<?php echo($row['id_cat']);?>" class="type_main_title"><?php echo($row['name']);?></p>
           
            
            
  <?php
$result_set1 = $mysqli->query('SELECT * FROM simptoms WHERE id_cat="'.$row['id_cat'].'"');
//while($row1 = mysqli_fetch_array($result_set1)){echo($row1['id_cat']);}
?><div id="type_box_<?php echo($row['id_cat']);?>" style="display: none;">  <?php   
while($row1 = mysqli_fetch_array($result_set1)) {
?>            
 
<input class="type_checkbox" type="checkbox" id="<?php echo($row1['id_simp']);?>" name="f[]" value="<?php echo($row1['id_simp']);?>" title="Выбрать симптом"/><p> <?php echo($row1['name']); ?></p>
 
<?php } ?>
 </div></div>
      <?php } 
      
      ?><input type="submit" value="Показать результат"> </form>
       
   <br>
         </div>
</div>


     
     <?php



if (isset($_GET['sim'])) 
{
    $aDoor=$_POST['f'];
    
    $N = count($aDoor);
for($i=0; $i < $N; $i++)
    {
      
$result_set1 = $mysqli->query('SELECT * FROM sick_simp WHERE id_simp="'.$aDoor[$i].'"');

     while($row1 = mysqli_fetch_array($result_set1)){
         
         
         $result_set2 = $mysqli->query('SELECT * FROM sick WHERE id_sick="'.$row1[id_sick].'"');
         $row2 = mysqli_fetch_array($result_set2);
         $result_set13 = $mysqli->query('UPDATE `sick` SET count=count+1 WHERE name="'.$row2['name'].'"');
  
     }   
        
    
  
    }
     $result_set16 = $mysqli->query('SELECT MAX(count) AS count FROM sick');
         $row16 = mysqli_fetch_array($result_set16);
         $MAX = $row16[count];
     
    $result_set19 = $mysqli->query('SELECT * FROM sick WHERE count="'.$MAX.'"');
    while($row19 = mysqli_fetch_array($result_set19)){
            
            ?><p> <?php 
            echo($row19['name']);echo(', количество совпадений симптомов - ');echo($row19['count']);
            ?></p> <br> <?php
            
        }
    
    $result_set13 = $mysqli->query('UPDATE `sick` SET count=0');
}

if (isset($_GET['ti'])) 
{ 
    $new_FIO = $_POST['name']; 
    $new_email = $_POST['email']; 
    $new_pass = $_POST['password']; 
    $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
$passwordhash = sha1($new_pass);

 $result_set54 = $mysqli->query('SELECT * FROM user WHERE email="'.$new_email.'"');
$row54 = mysqli_fetch_array($result_set54);
if($row54['id']==NULL){
$result_set = $mysqli->query("INSERT INTO `user` VALUES (NULL,'$new_FIO','$new_email','$passwordhash')");

?><script>document.location.href="reges.php"</script><?php
}

else{
    ?><script>alert('Пользователь с такой почтой уже есть!');</script><?php
    ?><script>document.location.href="reges.php"</script><?php }
}
if (isset($_GET['auth'])) 
{ 
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
$passwordhash = sha1($pass);
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
           
           if($passwordhash==$row1['Password']){
        $_SESSION['admin'] = $email;
          
        ?><script>document.location.href="reges.php"</script><?php
       
       }
       else{?><script>alert('Пароль неправильный!');</script><?php   } } 
    
     if($email==$row['email'] and $login !== '')
     {
         
     
       if($passwordhash==$row['password'])
       {
           $_SESSION['name'] = $email;
           $_SESSION['name1'] = $row['name'];
           $_SESSION['id'] = $row['id'];
        ?><script>document.location.href="reges.php"</script><?php
       
       }  else{?><script>alert('Пароль неправильный!');</script><?php }
    }
    else{ ?><script>alert("Логин неправильный!");</script><?php }
    
      
      
}
if (isset($_GET['log'])) 
{ 
    $_SESSION['admin'] = false;
        $_SESSION['name'] = false;
    ?><script>document.location.href="reges.php"</script><?php
  }
?>

</body>
</html>