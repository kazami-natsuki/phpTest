<?php
//1. $number に数字を代入し、 if文で $number が偶数だったら 「偶数です」、もし違ったら「奇数です」と表示するように実装してください。
$number = 2;
if ($number % 2 === 0) {
    echo "偶数です";
} else {
    echo "奇数です";
}
echo "<br>";

//2. 【応用】$animals に配列で大きい順で好きな動物を5種類代入し、for文で逆番に出力してください。
$animals = array("elephant","bear","sheep","dog","cat");

for ($i = 4; $i >= 0; $i--) { 
    echo $animals[$i];
    echo "<br>";
}


//3. 【応用】 for文を使って、下記のような九九表を表させてください
for ($i=1; $i <= 9; $i++) { 
    for ($j=1; $j <= 9; $j++) { 
        echo "$i × $j は" . ($i * $j) . "です。";
        echo "<br>";
    }
}

 ?>