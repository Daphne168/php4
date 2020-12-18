<?php
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$gender   = isset($_POST['gender'])   ? $_POST['gender']   : '';
$blood    = isset($_POST['blood'])    ? $_POST['blood']    : '';
$birth_yy = isset($_POST['birth_yy']) ? $_POST['birth_yy'] : '';
$birth_mm = isset($_POST['birth_mm']) ? $_POST['birth_mm'] : '';
$birth_dd = isset($_POST['birth_dd']) ? $_POST['birth_dd'] : '';
$marriage = isset($_POST['marriage']) ? $_POST['marriage'] : '';
$hobby1   = isset($_POST['hobby1'])   ? $_POST['hobby1']   : '';
$hobby2   = isset($_POST['hobby2'])   ? $_POST['hobby2']   : '';
$hobby3   = isset($_POST['hobby3'])   ? $_POST['hobby3']   : '';
$hobby4   = isset($_POST['hobby4'])   ? $_POST['hobby4']   : '';
$intro    = isset($_POST['intro'])    ? $_POST['intro']    : '';

// extract() 函式的使用，有安全性的問題
// extract($_POST);

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Survey</title>
</head>

<body>
<p>{$nickname} 你好，已經收到您的資料，如下：</p>
<p>姓名：{$nickname}</p>
<p>密碼：{$password}</p>
<p>性別：{$gender}</p>
<p>血型：{$blood}</p>
<p>生日：{$birth_yy} 年 {$birth_mm} 月 {$birth_dd} 日</p>
<p>已婚：{$marriage}</p>
<p>興趣：{$hobby1}, {$hobby2}, {$hobby3}, {$hobby4} </p>
<p>介紹：{$intro}</p>

</body>
</html>
HEREDOC;

echo $html;
?>