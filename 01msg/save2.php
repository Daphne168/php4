<?php
//接收input2.php表單的二項欄位資料
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$comment = isset($_POST['comment']) ? $_POST['comment']: '';

// 修正時區(因為會差8小時)
date_default_timezone_set('Asia/Taipei');
// 抓取伺服器上日期及時間
$now = date('Y-n-j H:i:s');



//下方是設定存檔下來的格式
$data = <<< HEREDOC
日期：{$now}
姓名：{$nickname}
意見：{$comment}
---------------------------------------------------

HEREDOC;



//依日期每天存檔
$filename='save/' .date('Ymd') . '.txt';
$old = file_get_contents($filename);

// 以下是（新+舊的留言）=新的留言+舊的留言
$new = $data . $old;

// php存檔的指令
// file_put_contents('檔名',內容);

// 以下是把資料寫入檔案內
file_put_contents($filename,$new);

//以下是show在畫面給user看的訊息
$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
謝謝，已收到您的資料!
</body>
</html>
HEREDOC;

echo $html;





?>