<?php
echo "Exercise 1<br>";

$i = 0;
while ($i <= 100){
    if ($i % 3 == 0){
        echo $i . " ";
    }
    $i++;
}

echo "<br><br>Exercise 2<br>";

$i = 0;
do {
    if ($i == 0){
        echo "$i - это ноль.<br>";
    }
    elseif ($i % 2 == 0){
        echo "$i - это чётное число.<br>";
    }
    else {
        echo "$i - это нечётное число.<br>";
    }
    $i++;
}
while ($i <= 10);

echo "<br><br>Exercise 3<br>";

$cities = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"], "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"], "Тульская область" => ["Кимовск", "Донской", "Узловая", "Новомосковск"]
    ];
foreach ($cities as $key => $value){
    $value = implode(", ", $value);
    echo "$key: <br> $value <br>";
}

echo "<br><br>Exercise 4<br>";

$abc = ["а"=>"a", "б"=>"b", "в"=>"v", "г"=>"g", "д"=>"d", "е"=>"e", "ж"=>"zh", "з"=>"z", "и"=>"i", "й"=>"j", "к"=>"k", "л"=>"l", "м"=>"m", "н"=>"n", "о"=>"o", "п"=>"p", "р"=>"r", "с"=>"s", "т"=>"t", "у"=>"u", "ф"=>"f", "х"=>"kh", "ц"=>"ts", "ч"=>"ch", "ш"=>"sh", "щ"=>"shch", "ъ"=>"'", "ы"=>"y", "ь"=>"'", "э"=>"e", "ю"=>"yu", "я"=>"ya"];

strtr($sentence, $abc); //Функция транслитерации,совпадающие ключи заменяются их значениями
echo $perevod = strtr("портал обучения", $abc);
echo "<br>";

array_flip($abc); //Меняет местами ключи и их значения
echo $perevod = strtr("programmirovaniyu", array_flip($abc)); // Обратная транслитерация

echo "<br><br>Exercise 5<br>";

function changeSpaces($string){
    echo str_replace(" ", "_", $string);
}
echo changeSpaces("груша яблоко банан");


echo "<br><br>Exercise 6<br>";

$startpage = ["GeekUniversity", "Курсы" => ["PHP", "Python", "Ruby"], "Форум"];

function Menu($array){
    $MenuArray[] = '<ul>';
    foreach ($array as $key => $value){
        if (is_array($value)) {
            $MenuArray[] = '<li>' . $key . Menu($value) . '</li>';
        } else {
            $MenuArray[] = '<li>' . $value . '</li>';
        }
    }
    $MenuArray[] = '</ul>';
    return implode($MenuArray);
}
echo Menu($startpage);


echo "<br><br>Exercise 7<br>";

for($i = 0; $i < 10; print($i++) . " "){
    // пусто
}

echo "<br><br>Exercise 8<br>";

$cities = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"], "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"], "Тульская область" => ["Кимовск", "Донской", "Узловая", "Новомосковск"]
    ];
foreach ($cities as $key => $value){
    echo "$key<br>";
    foreach ($value as $key => $value){
        if (mb_substr($value, 0, 2) == 'К'){
            echo "$value<br>";
        }
    }
}

echo "<br><br>Exercise 9<br>";

function translite ($sentence){
    $abc = ["а"=>"a", "б"=>"b", "в"=>"v", "г"=>"g", "д"=>"d", "е"=>"e", "ж"=>"zh", "з"=>"z", "и"=>"i", "й"=>"j", "к"=>"k", "л"=>"l", "м"=>"m", "н"=>"n", "о"=>"o", "п"=>"p", "р"=>"r", "с"=>"s", "т"=>"t", "у"=>"u", "ф"=>"f", "х"=>"kh", "ц"=>"ts", "ч"=>"ch", "ш"=>"sh", "щ"=>"shch", "ъ"=>"'", "ы"=>"y", "ь"=>"'", "э"=>"e", "ю"=>"yu", "я"=>"ya"];
    $newstring = strtr($sentence, $abc);
    echo changeSpaces($newstring);
}
translite("совпадающие ключи заменяются их значениями");


?>