<?php
for ($i = 1; $i <= 5; $i++){
echo $i*2 . "<br />";
}
?>

<?php
$count = 0;

while($count < 20 ){
    $count += 1;
    echo $count . "<br />";
}
?>

<?php
$count = 0;

while($count <= 100){
    if($count === 20){
        break;
    }
    if($count %3 === 0){
        $count ++;
        continue;
    }
    echo $count . "<br />";
    $count++;
}
?>

<?php
$num = 0;
do {
    echo "num = " . $num ."<br />";
    $num++;
}while($num <= 2);
?>

//FizzBuzz問題
<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for($number = 1;$number <= 50;$number++){
    if($number %15 == 0){
        echo $FizzBuzz . "<br />";
    }elseif($number %3 == 0){
        echo $Fizz . "<br />";
    }elseif($number %5 == 0){
        echo $Buzz . "<br />";
    }else{
        echo $number . "<br />";
    }
}
?>

<?php
for($i = 1; $i < 6; $i++){
    for($j=1; $j <6;$j++){
    echo "●";
    }
    echo "<br />";
}