<?php

$arr = array(2, 5, 1, 7, 4);

for ($i = 0; $i < count($arr); $i++) {

    for ($j = 0; $j < count($arr) - 1; $j++) {
        if ($arr[$j + 1] > $arr[$j]) {
            $temp = $arr[$j + 1];
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $temp;

            //  echo $arr[$j + 1];
            //echo "<br>";
            //echo  $arr[$j];

            // return;

        }
    }
}

//var_dump($arr);

print_r($arr);


//how to find missing number in array 

$a = array(1, 2, 3, 4, 6);

echo  sizeof($a);

for ($i = 0; $i < sizeof($a); $i++) {
    for ($j = 0; $j < sizeof($a) - 1; $j++) {
        if ($a) {
        }
    }
}

///

#to print prime number


function checkprime()
{
    echo "5432q1";
}


///// remove duplicates from array 


$amparray = array(1, 2, 1, 3, 4, 5);

$remove = [];


foreach ($amparray  as $res) {

    if (!in_array($res, $remove)) {
        $remove[] = $res;
    }
}



echo "<br>";

print_r($remove);


$cd = array_search(1, $amparray);


echo "<br>";

echo $cd;

/// factorial number in php

$f = 1;

for ($fac = 1; $fac <= 3; $fac++) {
    $f = $f * $fac;
}


echo "<br>";

echo $f;
