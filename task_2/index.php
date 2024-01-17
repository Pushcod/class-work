<?

// for($i = 1; $i <= 10; $i++) {
//     echo "<table>"
//      . $i . 
//     "</table>";
// }

//таблица чисел

$college = array(
    "Students" => array("Никита", "Гена", "Стас", "Кто"),
    "Teacher" => array("Никита Андреевич", "Крылова", "Чертвертнов", "Рыжков")
);

foreach($college as $people => $items) {
    echo "<h1>$people</h1>";
    echo "<ul>";
    foreach($items as $item => $value){
        echo "<li>$value</li>";
    }
    echo "</ul>";
}