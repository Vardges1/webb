<HTML> 
<HEAD> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>Выполнение лабораторной работы # 3</TITLE> 
</HEAD> 
<BODY> 
<H1>Поиск изображ
Сделано на Студлансе)
</H1> 
<HR> 

<FORM method="POST" action="?ask">
<INPUT type="text" name="pic"> 
<INPUT type="submit"><BR> 
</FORM> 


<?php


if (isset($_GET['ask'])) {

  $pic = $_POST['pic'];
$directory = dirname(__FILE__);// Папка с изображениями 

$allowed_types=array("jpg", "png", "gif"); //разрешеные типы изображений 
$file_parts = array(); 
$ext=""; 
$title=""; 
$i=0; 
//пробуем открыть папку 
$dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!"); 
while ($file = readdir($dir_handle)) //поиск по файлам 
{ 
if($file=="." || $file == "..") continue; //пропустить ссылки на другие папки 
$file_parts = explode(".",$file); //разделить имя файла и поместить его в массив 
$ext = strtolower(array_pop($file_parts)); //последний элеменет - это расширение 


if(in_array($ext,$allowed_types)) 
{ 
    
    foreach ($file_parts as $key => $value) {

if($value==$pic){
echo '<div class = "blok_img" > 
<img src="'.'\\'.$file.'" width="200" title="'.$file.'" /> 
</div>'; 
$i++; }
}
} 

} 

while ($file = readdir($dir_handle)) //поиск по файлам 
{ 
if($file=="." || $file == "..") continue; //пропустить ссылки на другие папки 
$file_parts = explode(".",$file); //разделить имя файла и поместить его в массив 
$ext = strtolower(array_pop($file_parts)); //последний элеменет - это расширение 


if(in_array($ext,$allowed_types)) 
{ 
    

echo '<div class = "blok_img" > 
<img src="'.'\\'.$file.'" width="200" title="'.$file.'" /> 
</div>'; 
$i++; }
}
 



closedir($dir_handle);

echo "Все графические изображения на сервере";

  $pic = $_POST['pic'];
$directory = dirname(__FILE__);// Папка с изображениями 

$allowed_types=array("jpg", "png", "gif"); //разрешеные типы изображений 
$file_parts = array(); 
$ext=""; 
$title=""; 
$i=0; 
//пробуем открыть папку 
$dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!"); 
while ($file = readdir($dir_handle)) //поиск по файлам 
{ 
if($file=="." || $file == "..") continue; //пропустить ссылки на другие папки 
$file_parts = explode(".",$file); //разделить имя файла и поместить его в массив 
$ext = strtolower(array_pop($file_parts)); //последний элеменет - это расширение 


if(in_array($ext,$allowed_types)) 
{ 
    
    
echo '<div class = "blok_img" > 
<img src="'.'\\'.$file.'" width="200" title="'.$file.'" /> 
</div>'; 
$i++; 
} 

} 

while ($file = readdir($dir_handle)) //поиск по файлам 
{ 
if($file=="." || $file == "..") continue; //пропустить ссылки на другие папки 
$file_parts = explode(".",$file); //разделить имя файла и поместить его в массив 
$ext = strtolower(array_pop($file_parts)); //последний элеменет - это расширение 


if(in_array($ext,$allowed_types)) 
{ 
    

echo '<div class = "blok_img" > 
<img src="'.'\\'.$file.'" width="200" title="'.$file.'" /> 
</div>'; 
$i++; }
}
 



closedir($dir_handle);


}
?>
<?php if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK)
{
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo "Файл загружен";
}
?>
<h2>Загрузка файла</h2>
<form method="post" enctype='multipart/form-data'>
Выберите файл: <input type='file' name='filename' size='10' /><br /><br />
<input type='submit' value='Загрузить' />
</form>

</BODY>
</HTML>