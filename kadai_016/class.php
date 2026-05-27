<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ==============================
        // Step2. クラスを作成する
        // ==============================

        class Food {
            // ○ 正しい：Foodクラスに name プロパティを作る
            public $name;

            // ○ 正しい：Foodクラスに price プロパティを作る
            public $price;

            // ○ 正しい：コンストラクタ
            // new Food("りんご", 100) のようにインスタンス化したとき、
            // 引数の値をプロパティに代入する
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // ○ 修正ポイント：
            // show_price は「priceを表示するメソッド」
            // なので、引数で値を受け取るのではなく、
            // すでに入っている $this->price を echo する
            public function show_price() {
                echo $this->price;
            }

            // × あなたの元コードでは、ここに
            // $food1 = new Food("りんご", 100);
            // print_r($food1);
            // と書いていました。
            //
            // でも、クラスの中は「設計図」を書く場所です。
            // インスタンス作成や出力処理は、クラスの外に書きます。
        }

        class Animal {
            // ○ 正しい：Animalクラスに name プロパティを作る
            public $name;

            // ○ 正しい：Animalクラスに height プロパティを作る
            public $height;

            // ○ 正しい：Animalクラスに weight プロパティを作る
            public $weight;

            // ○ 正しい：コンストラクタ
            // new Animal("犬", 50, 20) のようにインスタンス化したとき、
            // 引数の値をプロパティに代入する
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // ○ 修正ポイント：
            // show_height は「heightを表示するメソッド」
            // なので、引数で値を受け取るのではなく、
            // すでに入っている $this->height を echo する
            public function show_height() {
                echo $this->height;
            }

            // × あなたの元コードでは、ここに
            // $animal1 = new Animal("犬", 50, 20);
            // print_r($animal1);
            // と書いていました。
            //
            // これもクラスの中ではなく、クラスの外に書きます。
        }

        // ==============================
        // Step3. インスタンスを作成し、出力する
        // ==============================

        // ○ 正しい：Foodクラスを元にインスタンスを作成する
        // "りんご" が name に、100 が price に入る
        $food1 = new Food("りんご", 100);

        // ○ 正しい：Animalクラスを元にインスタンスを作成する
        // "犬" が name に、50 が height に、20 が weight に入る
        $animal1 = new Animal("犬", 50, 20);

        // ○ Step3の出力：
        // print_r は「インスタンス全体の中身」を確認するためのもの
        // name や price など、プロパティ全体が表示される
        print_r($food1);
        echo "<br>";

        // ○ Step3の出力：
        // Animalインスタンス全体の中身を確認している
        // name, height, weight がまとめて表示される
        print_r($animal1);
        echo "<br>";

        // ==============================
        // Step4. メソッドへアクセスする
        // ==============================

        // ○ Step4：
        // $food1 の中にある show_price メソッドを実行する
        // print_rと違って、インスタンス全体ではなく price だけを表示する
        $food1->show_price();
        echo "<br>";

        // ○ Step4：
        // $animal1 の中にある show_height メソッドを実行する
        // print_rと違って、インスタンス全体ではなく height だけを表示する
        $animal1->show_height();
        ?>
    </p>
</body>

</html>