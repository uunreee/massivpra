<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <?
    ?>
    <h1>№ 1</h1>
    <?
    $array = ['Краснова', 'Дудкин', 'Шамсунов', 'Кадиев', 'Сидоров', 'Вафин'];
    print_r($array);
    echo '<br>';
    echo 'Количество студентов: ' . count($array);
    echo '<br>';

    if (in_array('Сидоров', $array)) {
        echo 'Сидоров есть в списке';
    } else {
        echo 'Сидорова нет в списке';
    }

    echo '<br>';

    $expelled = array_pop($array);
    echo 'Удалена фамилия ' . $expelled . '<br> <br>'; ?>

    <h1>№ 2</h1>
    <? $array2 = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];

    asort($array2);
    foreach ($array2 as $arr => $surname) {
        echo "$arr : $surname";
        echo '<br>';
    }
    echo '<br>'; ?>


    <h1>№ 3</h1>
    <? $student = [
        'name' => 'Ксюша',
        'surname' => 'Краснова',
        'group' => '425',
        'hobbi' => 'smm',
        'social' => ['telegram' => 'qwerty', 'insta' => 'qwerty']
    ];?>
    <p><span>Имя: </span><?echo $student['name'];?></p>
    <p><span>Фамилия: </span><?echo $student['surname'];?></p>
    <p><span>Группа: </span><?echo $student['group'];?></p>
    <p><span>Хобби: </span><?echo $student['hobbi'];?></p>
    <p><span>Соцсети: </span>телеграм - <?echo $student['social']['telegram']. ', инста - '. $student['social']['insta'];?></p>

</body>

</html>