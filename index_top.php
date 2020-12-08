<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/myuniform_top.css">
    <title>MyUniform ~ スポーツウェアコーデを可視化しよう！ ~ </title>
</head>

<body>

    <!-- formにはaction, method, nameを設定！ -->
    <!-- 下のform については実装が進んできてファイル増やしたら
    出現させましょう -->
    <!-- <form action="myuni_get_confirm.php" method="GET"> -->
    <form action="index_top_confirm2.php" method="POST">
        <fieldset>
            <legend>ユーザー情報入力（GET）</legend>
            <div class="cp_iptxt">
                <label class="ef">
                    userid :<input type="text" name="userid" value="">
                </label>
            </div>
            <div class="cp_iptxt2">
                <label class="ef">
                    性別: <input type="text" name="gender" value="">
                </label>
            </div>
            <div>brand
                <input type="radio" name="brand" value="nike">ナイキ
                <input type="radio" name="brand" value="adidas">アディダス
                <input type="radio" name="brand" value="diadora">ディアドラ
                <input type="radio" name="brand" value="yonex">ヨネックス
                <input type="radio" name="brand" value="asics">アシックス
                <input type="radio" name="brand" value="ellese">エレッセ
                <input type="radio" name="brand" value="fila">フィラ
                <input type="radio" name="brand" value="lacoste">ラコステ
                <input type="radio" name="brand" value="prince">スリクソン
                <input type="radio" name="brand" value="babolat">バボラ
                <input type="radio" name="brand" value="newbalance">New Balance
                <input type="radio" name="brand" value="wilson">ウィルソン
                <input type="radio" name="brand" value="folkl">フォルクル
                <input type="radio" name="brand" value="lecoq">ルコック
            </div>

            <!-- <div>
            brand: <input type="checkbox" name="brand" value="ナイキ">サンプル
            brand: <input type="checkbox" name="brand" value="アディダス">サンプル
            brand: <input type="checkbox" name="brand" value="ディアドラ">サンプル
            brand: <input type="checkbox" name="brand" value="ヨネックス">サンプル -->

            <div>カラー
                <input type="radio" name="color" value="white">ホワイト
                <input type="radio" name="color" value="black">ブラック
                <input type="radio" name="color" value="red">レッド
                <input type="radio" name="color" value="blue">ブルー
                <input type="radio" name="color" value="pink">ピンク
            </div>
            <div>デザイン
                <input type="radio" name="design" value="plain">無地
                <input type="radio" name="design" value="border">縞
                <input type="radio" name="design" value="military">迷彩
                <input type="radio" name="design" value="other">その他
            </div>
            <!-- <div>
        todo: <input type="text" name="todo">
      </div>
      <div>
        deadline: <input type="date" name="deadline">
      </div>
      <div> -->
            <button>ユーザー情報を登録する</button>
            </div>
        </fieldset>
    </form>

</body>


</html>