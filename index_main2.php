<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/myuniform.css">
    <title>マイユニフォーム編集画面</title>
    <style>
        #base_manekin {
            width: 600px;
        }

        #manekin_tops {
            width: 240px;
        }

        #manekin_pants {
            width: 200px;
        }

        #manekin_shoes {
            width: 160px;
        }
    </style>
</head>

<body>
    <div id="headerArea">
        <div id="logoBlock"></div>
    </div>
    <div id="manekin_back"></div>
    <div id="base_manekin" style="top:160px; left:176px">
        <img src="./img/base_manekin.jpg" width="90%" />
    </div>

    <div id="manekin_tops" style="position:absolute; z-index:2; top:100px; left:155px">
        <img id="tops" src="img/nike_top3.jpg" width="100%">
    </div>
    <div id="manekin_pants" style="position:absolute; top:280px; left:195px">
        <img id="pants" src="img/nike_pants3.jpeg" width="70%">
    </div>
    <div id="manekin_shoes" style="position:absolute; top:470px; left:225px">
        <img id="shoes" src="img/nike_shoes3.jpg" width="68%">
    </div>

</body>

</html>