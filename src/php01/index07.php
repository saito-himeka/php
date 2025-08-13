<?php

function outputnumber($a,$b)
{
    $add = $a + $b;
    return $add;
}
$total = outputnumber(2,3);
echo $total;
echo '<br>';
?>

<?php

function addScore($score1,$score2,$score3)
{
    $total = $score1 + $score2 + $score3;
    if($total > 250){
    echo "合計点は" . $total . "なので合格です";
    }else{
    echo "合計点は" . $total . "なので不合格です";
    }
}
echo (addScore(80,60,90));
echo '<br>';
?>

<?php
function sankaku($base,$height)
{
    return $base * $height /2;
}
function sikaku($base,$height)
{
    return $base * $height;
}
function daikei($upperbase,$lowerbase,$height)
{
    return ($upperbase + $lowerbase) * $height /2;
}

echo sankaku(7,8). "\n";
echo sikaku(5,5) . "\n";
echo daikei(4,5,4);