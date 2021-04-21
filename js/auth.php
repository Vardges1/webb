<?php    $email = $_POST['email'];
    $pass = $_POST['password'];
    $d = false;    
  $mysqli = @new mysqli('localhost', 'id15267461_root', '^EtgwnE9yjma%s}L', 'id15267461_base3');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
     $result_set = $mysqli->query('SELECT * FROM user WHERE email="'.$email.'"');
     
      $row = mysqli_fetch_array($result_set);
    
     if($email==$row['email'] and $login !== '')
     {
         
     
       if($pass==$row['pass'])
       {
           $_SESSION['name'] = $email;
            $_SESSION['id'] = $row['id'];
        ?><script>document.location.href="cab.php"</script><?php
       
       }  else{?><script>alert('Пароль неправильный!');</script><script>document.location.href="auth.php"</script><?php }
    }
    else{ ?><script>alert("Логин неправильный!");</script><script>document.location.href="auth.php"</script><?php } ?>
    
      