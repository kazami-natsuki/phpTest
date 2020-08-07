<?php 
// 引数に税抜きの数値を指定して実行すると、税込み(消費税10%)の数値を返す関数を作成してください

function with_tax($price) {
    $result = 0;
        $result = $price * 1.1;
    return $result;
}

echo with_tax(200) . "\n";

// $name と $age を仮引数に持ち $age が20以上の場合は $nameを返し、それ以外は「未成年」と返す関数を作成してください

function minor($age, $name) {
    if ($age >= 20) {
        echo $name;
    } else {
        echo "未成年";
    }
}

echo minor(21, "namae") . "\n";
echo minor(10, "na") . "\n";

// $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素の中央値を返す関数を作成してください。
function median($arr) {
    sort($arr);
    if (count($arr) % 2 == 0) {
        return (($arr[(count($arr) / 2) - 1] + $arr[((count($arr) / 2))]) / 2);
    } else {
        return ($arr[floor(count($arr) / 2)]);
    }
}

echo median([1,3,5,7,9]) . "\n";

// $price と $amount という配列の仮引数を持ち、$price * $amount が1万以上なら20%引きの値を返す関数を作成してください
function order($price, $amount) {
    if ($price * $amount >= 10000) {
        return ($price * $amount) * 0.8;
    } else {
        return $price * $amount;
    }
}

echo order(1000, 100) . "\n";

// 【応用】次のプログラムは、配列の中で1番小さい値を返す min_array という関数を実装しようとしています。途中の部分を完成させてください。
function min_array($arr) {
  // とりあえず配列の最初の要素を1番小さい値とする
  $min_number = $arr[0];
  foreach($arr as $a) {
    if ($min_number > $a) {
        $min_number = $a;
    }
  }
  return $min_number;
}

echo min_array([8,3,2,7,4]);