<?php
include(".env");
?>
<html>
<head>
  <title>tolaravel</title>
<style>
#titleArea, #footer {
  background-color:<?= ENV_COLOR_CODE ?>;
  color:#fff;
}
#footer {
  text-align:center;
}
.tour {
  display:inline-block;
  background-color:#bee;
  width:300px;
  height:160px;
  text-align:center;
  line-height:160px;
  color:#fff;
  font-size:40px;
}
.tourSea .tour {
  background-color:#1ec1e1;
}
.tourTounan .tour {
  background-color:#0da;
}
.tourGroup {
  margin-bottom:5px;
}
</style>
</head>
<body>
<div id="titleArea">
  <h1>tolaravel [<?= APP_ENV ?>]</h1>
</div>
<div class="tourGroup tourCity">
<div class="tour">東京</div>
<div class="tour">パリ</div>
<div class="tour">ローマ</div>
</div>
<div class="tourGroup tourSea">
<div class="tour">ハワイ</div>
<div class="tour">グアム</div>
<div class="tour">ドバイ</div>
</div>
<div class="tourGroup tourTounan">
<div class="tour">ブラジル</div>
<div class="tour">ジャマイカ</div>
<div class="tour">コロンビア</div>
</div>
<div id="footer">
  release <?= file_get_contents("deploy.log") ?>
</div>
</body>
</html>
