<?php
require 'config.php'; //Подключаем файл конфигурации
require 'process.php'; //Подключаем файл-обработчик
//Форма отправки изображений на сжатие
if(isset($_FILES['fupload'])) {
if(preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['fupload']['name'])) { //Допустимые форматы изображений для загрузки
    $filename = $_FILES['fupload']['name'];
    $source = $_FILES['fupload']['tmp_name']; 
    $target = $path_to_image_directory . $filename;
    move_uploaded_file($source, $target);
    createThumbnail($filename);
    }
}

//Скрипт вывода картинок 
$dir_small = 'small/'; //Папка с миниатюрами
$dir_big = 'big/'; //Папка с полноразмерными картинками
$cols = 4; //Количество столбцов в будущей таблице с картинками
$files = scandir($dir_small); //Сканируем всё содержимое папки с миниатюрами
echo "<table>";
$k = 0; //Вспомогательный счётчик для перехода на новые строки
for ($i = 0; $i < count($files); $i++) {
    if (($files[$i] != ".") && ($files[$i] != "..")) { //Исключаем текущий и родительский  каталоги
      if ($k % $cols == 0) {
          echo "<tr>"; } //Добавляем новую строку
    echo "<td>";
    $path_to_small = $dir_small.$files[$i]; //Путь к миниатюре
    $path_to_big = $dir_big.$files[$i]; //Путь к картинке
    echo "<a href='$path_to_big' target='_blank'>"; //Cсылка на картинку
    echo "<img src='$path_to_small' alt='' />"; //Вывод миниатюр
    echo "</a>";
    echo "</td>";
    if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) {
        echo "</tr>"; }
    $k++; //Увеличиваем вспомогательный счётчик
    }
  }
echo "</table>";
?>

<h1>Загрузка изображений:</h1>	
<form enctype="multipart/form-data" action="" method="post">		
<input type="file" name="fupload" />		
<input type="submit" value="Загрузить" />
</form>