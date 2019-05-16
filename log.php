<?php

$logName = sys_get_temp_dir().'/'.date('Y-m-d').'-evli.log';
if ($_GET) {
    file_put_contents($logName, json_encode(['date' => date('Y-m-d H:i:s'), 'query' => $_GET]).PHP_EOL, FILE_APPEND | LOCK_EX);
}

$logs = explode(PHP_EOL, file_get_contents($logName));
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>log</title>
<!--CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<!--JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<table>
<thead><tr><th>日時</th><th>クエリ</th></tr></thead>
<tbody>
<?php foreach ($logs as $log): ?>
<?php $log = trim($log) ?>
<?php if ($log === '') continue ?>
<?php $row = json_decode($log, true) ?>
<tr><th><?= h($row['date']) ?></th><th><?= h(json_encode($row['query'])) ?></th></tr>
<?php endforeach ?>
</tbody>
</body>
</html>
