<?

$weather = rand(1,4);

if($weather == 1) {
    echo "Идёт дождь наденьте куртку";
} else if($weather == 2) {
    echo "Идёт снег оденьтесь по теплее";
} else if ($weather == 3){
    echo "На улице ливень";
}
else {
    echo "на улице тепло";
}