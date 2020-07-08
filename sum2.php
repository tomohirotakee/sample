<?php
function sum($max){
    $result = $max*2;
    return $result;
}
echo sum(100);
?>

<?php
function f($a, $b) {
    $result = $a + $b;
    return $result;
}
echo f(1,2);
?>

<?php
function multiply($arr) {
    $result = 1;
    foreach($arr as $a){
      $result *= $a;
    }
    echo $result;
}
multiply(array(1,3,5,7,9));
echo "/n";
?>

<?php
 function max_array($arr){
 $max_number = $arr[0];
 foreach ($arr as $a){
if($max_number<$a){    
    $max_number = $a;
}
 }
 return $max_number;
 }
 $list= [4,6,3,7,5];
 echo max_array($list);
 ?>
 
 <?php
 $str = "<h1>strip_tags関数</h1>"
  ."<p>タグ取り除くよっ！</p>";
 echo strip_tags($str)."/n";
 ?>
 
 <?php
 $fruits = ['apple', 'orange', 'melon'];
 array_push($fruits, 'banana', 'pineapple');
 print_r($fruits);
 ?>
 
 <?php
 $array1 = [1, 2, 3];
 $array2 = [10, 20, 30];
 $array3 = [10, 100, 1000];
 $array = array_merge($array1, $array2, $array3);
 print_r($array);
 ?>
 <?php
 //現在のタイムスタンプを取得
 $time1 = time();
 //3日後のタイムスタンプを取得
 $time2 = time() + (3*24*60*60);
 if($time1 < $time2){
    echo 'time2が大きい値です。';
 }
 ?>

 <?php
 $timestamp = mktime(0, 0, 0, 8, 1, 2017);
 echo $timestamp;
 ?>
 
 <?php
 echo date('2020/07/06');
 echo '<br>';
 echo date('2020/07/06 14:10:20');
 echo '<br>';
 echo date('2020年07月06日');
 echo '<br>';
 echo date('2020年07月06日14時10分20秒');
 echo '<br>';
 ?>
 <?php
 echo tomohiro>sum2.php;
 
 