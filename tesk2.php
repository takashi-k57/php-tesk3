<?php
$name="kondo takashi";
if($name =="kondo takshi"){
  echo "私はあなたの名前です";
}else{
  echo "あなたの名前ではありません";
}
?>

<?php
$total= 0;
for($i=0; $i <= 10000; $i++){
  $total +=$i;
}
echo $total;
?>

<?php
$fruits = array("banana","orange","grape","apple","lemon");
foreach($fruits as $fruits){
  echo $fruits;
  echo "\n";
}
?>

<?php
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
?>