<?php session_start();ini_set("display_errors", 0);?><!DOCTYPE html>
<html>
<head>
 
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
    line-height: 1.7;">
    <div class="dws-form">
   <p>Загрузите, пожалуйста, файл file.xlsx с данными IP в третьей колонке на сервер</p> 
<form action = "?file" method = "post" enctype = 'multipart/form-data'> 
<input type = "file" name = "somename" /> 
<input type = "submit" value = "Загрузить" /> 
</form> 

<?php 

if (isset($_GET['file'])) { 
$uploadfile = $_FILES['somename']['name']; 
move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile); 


$ips2 = []; 
$ips0 = []; 
$ips5 = []; 
array_push($ips2,"1"); 
array_push($ips0,"1"); 
array_push($ips5,"1"); 
$ips3 = []; 

require_once("PHPExcel.php"); 
// Подключение класса для вывода данных в формате Excel 
//require_once("PHPExcel/Writer/Excel5.php"); 

// Созданrequire_once "$_SERVER[DOCUMENT_ROOT]/xls/PHPExcel.php"; 
# Указываем путь до файла .xlsx 
$File = "file.xlsx"; 

$Excel = PHPExcel_IOFactory::load($File); 

# С какой строки начинаются данные 
$Start = 2; 
$Res = array(); 
for ($i= $Start; $i <= 1000; $i++) 
{ 
$Row = new stdClass(); 
$Row->id = $i; 

$Row->date = $Excel->getActiveSheet()->getCell('A'.$i )->getValue(); 
# Преобразовываем формат даты из MS в привычный 
//$Row->date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($oRow->date)); 
$Row->name = $Excel->getActiveSheet()->getCell('B'.$i )->getValue(); 
$Row->mail = $Excel->getActiveSheet()->getCell('C'.$i )->getValue(); 
$Row->name1 = $Excel->getActiveSheet()->getCell('D'.$i )->getValue(); 

if($Row->name == null) break; 
array_push($ips2,$Row->mail); 
array_push($ips0,$Row->name); 
array_push($ips5,$Row->name1); 
$Res[] = $Row; 
} 

$endpoint = 'http://ip-api.com/batch'; 
$options = [ 
'http' => [ 
'method' => 'POST', 
'content' => json_encode($ips2) 
] 
]; 

$response = file_get_contents($endpoint, false, stream_context_create($options)); 
$array = json_decode($response, true); 
foreach ($ips2 as $ip) 
//{ 
$index = 0; 
//} 

$phpexcel = new PHPExcel(); //Создаем новый Excel файл 
$page = $phpexcel->setActiveSheetIndex(0); 

//$File1 = "22.xlsx"; 

//$Excel1 = PHPExcel_IOFactory::load($File1); 


foreach ($array as $i) 
{ 
// $mySheet->setCellValue("A1","LK"); 

$g = $ips2 [$index]. "\t".$i["city"]."\t". $i["isp"]. "\t".$i["region"]."\n"; 

// print($ips2[$index]); 
// $Row->date = $Excel->getActiveSheet()->getCell('A'.$i )->setValue($i["city"]); 
$page->setCellValue('A'.$index, $i["city"]); //Записываем значения в указанные ячейки: 
$page->setCellValue('B'.$index, $i["region"]); 
$page->setCellValue('C'.$index, $ips2[$index]); 
$page->setCellValue('D'.$index, $ips5[$index]); 
// $page->setCellValue('D'.$index, "Файл сделан студлансером на заказ :)"); 
//$page->setCellValue("B1", $i["region"]); 
//$arr = array($g); 
//$text = serialize($arr); // 
//print($g); 

$index++; 
} 

//print_r($ips3); 

$objWriter = PHPExcel_IOFactory::createWriter($phpexcel, 'Excel2007'); 
/* Записываем в файл */ 
$objWriter->save("file.xlsx"); 
?> 
   <div class="dws-form">
<a href="/file.xlsx">download</a> </div>  
<?php } 
?>
    
</div>   
</div>

</body>
</html>