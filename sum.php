
    

<?php
// 1〜10 までを足した値を返す関数
function sum($max){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり $max より大きくなるまでループする
    for($i = 1; $i <= $max; $i++){

        // $result に　$i を順番に足していく
        $result += $i;
    }
      return $result;
}

// 関数を実行する
echo sum(100);
?>

<?php
function nub($abc){
     $def = $abc *2;
 
    return $def;
}

echo nub(50);
?>

<?php
function f($pass,$goal){
  $team=0;
  $team=$pass +  $goal;
    return $team;
}

echo f(10,5);
?>

<?php
$list= array(1,3,5,7,9);
$result = re($list);
function re($arr){
  $result=1;
  foreach($arr as $num){
    $result *=$num;
  }
    return $result;
}
echo $result;
?>

<?php
$arr=array(12,3,6,2);
 function max_array($arr){
 $result=0;
 foreach($arr as $a){
  if($result < $a){
    $result=$a;
  }
 }
 return $result;
}
 echo max_array($arr);
?>
 
<?php
//HTMLタグを含む文字列からタグを取り除くスクリプト
$str="<h1>今日は暑い</h1>";
echo strip_tags($str);
?>

<?php
$sports=['football','baseball','ski'];
//1以上の要素を配列に追加したいときに使用する
array_push($sports,'tennis','golf');
print_r($sports);
?>

<?php
$animal1=['mouse','cow','tiger','rabbits'];
$animal2=['dragon','snake','horse','sheep'];
$animal3=['monkey','chicken','dog','wildboar'];
//配列の要素の最後にひとつまたは複数の配列を結合するときに使用
$animal_merge=array_merge($animal1,$animal2,$animal3);
print_r($animal_merge);
?>

<?php
//現在のUnixタイムスタンプを取得するときに使用
echo time();
?>

<?php
//指定したUnixタイムスタンプを取得するときに使用
$timestamp=mktime(0,0,0,4,24,2016);
echo $timestamp;
?>

<?php
//指定された日時を任意の形式でフォーマットし、日付文字列を返すときに使用
echo date('Y/m/d');
echo "\n";

echo date('Y年m月d日');
?>



