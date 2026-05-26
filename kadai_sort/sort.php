<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
    // sort_2wayという名前の関数を作る
    // $arrayにはソートしたい配列を入れる
    // $orderにはソート方向を入れる
    // TRUEなら昇順、FALSEなら降順にする
    function sort_2way($nums, $order) {

    // $orderがTRUEの場合は、昇順にソートする
    if ($order === true) {

        // 昇順にソートすることを画面に表示する
        echo "昇順にソートします。<br>";

        // PHP標準関数sortを使って、配列を小さい順に並べ替える
        sort($nums);

    // $orderがTRUEではない場合、つまりFALSEの場合は、降順にソートする
    } else {

        // 降順にソートすることを画面に表示する
        echo "降順にソートします。<br>";

        // PHP標準関数rsortを使って、配列を大きい順に並べ替える
        rsort($nums);
    }

    // foreach文を使って、ソート後の配列の値を1つずつ取り出す
    foreach ($nums as $value) {

        // 取り出した値を画面に表示する
        // <br>を付けることで、1つ表示するごとに改行する
        echo $value . "<br>";
    }
    }

    // ソート対象の配列を用意する
    $nums = [15, 4, 23, 10, 18];

    // 第2引数にTRUEを指定して、昇順にソートする
    sort_2way($nums, true);

    // 第2引数にFALSEを指定して、降順にソートする
    sort_2way($nums, false);
    ?>

    </p>
</body>

</html>