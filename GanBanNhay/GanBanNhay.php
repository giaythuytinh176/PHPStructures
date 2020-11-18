<?php
include_once "Dance.php";
$queue1 = new SplQueue();
$queue2 = new SplQueue();
$dancer = new Dance('THUY', 'NU');
$dancer1 = new Dance('THUY1', 'NAM');
$dancer2 = new Dance('THUY2', 'NAM');
$dancer3 = new Dance('THUY3', 'NU');
$dancer4 = new Dance('THUY4', 'NU');
$dancer5 = new Dance('THUY5', 'NAM');
$dancer6 = new Dance('THUY6', 'NAM');
$dancer7 = new Dance('THUY7', 'NAM');
$queue1->enqueue($dancer);
$queue1->enqueue($dancer3);
$queue2->enqueue($dancer1);
$queue2->enqueue($dancer2);
$queue1->enqueue($dancer4);
$queue2->enqueue($dancer5);
$queue2->enqueue($dancer6);
$queue2->enqueue($dancer7);
//function getCoupleDancer($queue1, $queue2){
//    if($queue1->count()== 0 || $queue2->count() ==0){
//        echo 'Vao hang doi!';
//    }else{
//       echo  $queue1->dequeue()->getName().$queue2->dequeue()->getName();
//    }
//}
//getCoupleDancer($queue1,$queue2);
//getCoupleDancer($queue1,$queue2);
//getCoupleDancer($queue1,$queue2);
//getCoupleDancer($queue1,$queue2);
//getCoupleDancer($queue1,$queue2);

foreach ($queue1 as $key => $row): $row2 = $queue2[$key];

    echo "Cap " . ($key + 1) . " : " . $row->name . " voi " . $row2->name . "<br>";

    if ($queue1->count() > $queue2->count()) {
        if ($queue2->count() - 1 == $key) {
            echo "hang doi";
            echo "so nguoi doi la:" . ($queue1->count() - $queue2->count());
            break;
        }
    } elseif ($queue1->count() == $queue2->count()) {
        if ($queue2->count() - 1 == $key) {
            echo "k co hang doi";
            break;
        }
    } elseif ($queue1->count() < $queue2->count()) {
        if ($queue1->count() - 1 == $key) {

            echo "hang doi";
            echo "so nguoi doi la:" . ($queue2->count() - $queue1->count());
            break;
        }
    }

endforeach;
die;
