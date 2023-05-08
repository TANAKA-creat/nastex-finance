<!DOCTYPE html>
<html lang="ja">
<head><meta charset="utf-8"></head>
<body>
<?php
//Bitcoinの１時間足を取得する
$url = "https://api.cryptowat.ch/markets/binance/btcusdt/ohlc?periods=3600";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url); //URLを指定
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //データを文字列で受け取る
$res = curl_exec($ch);
curl_close($ch);
$candlestick = json_decode($res, true);
//為替を取得する
$url = "https://www.gaitameonline.com/rateaj/getrate";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
curl_close($ch);
$exchange = json_decode($res, true);
$usdjpy = $exchange["quotes"][20]["open"];
?>
<p>ローソク足（１時間足）</p>
<?php
for($i=0;$i<=3;$i++){
    $unixtime = $candlestick["result"][3600][$i][0];
    echo date('Y/m/d H 時　', $unixtime);
    echo "始値", $candlestick["result"][3600][$i][1] * $usdjpy;
    echo "　高値", $candlestick["result"][3600][$i][2] * $usdjpy;
    echo "　安値", $candlestick["result"][3600][$i][3] * $usdjpy;
    echo "　終値", $candlestick["result"][3600][$i][4] * $usdjpy;
    echo "<BR>";
}
?>
</svg>
</body>
</html>