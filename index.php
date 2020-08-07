<?php
// 第2章 - PHP実践 - 第1部 - 変数とデータ型 (復習)

//文字列はダブルクォーテーションで囲います
$test = "これはサンプルです。";

//数字はダブルクォーテーションなしでOK
$testNum = 123;

echo $test;
echo $testNum;
echo "<br>";

// 第2章 - PHP実践 - 第2部 - 条件分岐と繰り返し処理 (復習)
$height = 130;
// もし $height が 150 未満の数値なら、{ } のなかが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} 
echo "<br>";

// 第2章 - PHP実践 - 第3部 - 関数 (復習)
// 1〜10 までを足した値を返す関数
function sum($max) {

// $result は結果を保存する変数
$result = 0;

// $i は 1からはじまり $max より大きくなるまでループする
for($i = 1; $i <= $max; $i++) {

// $result に$i を順番に足していく
$result += $i;
}

// $result を結果として返す
return $result;
}

echo sum(100) . "\n";
?>