
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>01</title>
<!--CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<!--JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="margin: 10px;">
<h2>前提</h2>
リダイレクト先を http://localhost:8888/redirector.php?redirect= 経由し (redirect パラメータに http://localhost:8080/callback.php で始まるリダイレクト先のURL を渡せばOK)
受け側 http://localhost:8888/callback.php に GET で表示されるパラメータを問題の期待通りに実装してください

$_GET の結果を var_dump() しています 。

<h2>問題1</h2>


callback.php での var_dump($_GET) の結果が以下のようになるように リダイレクト処理を実装してください
ただし リダイレクトは header('Location: http://localhost:8888/redirector.php?redirect=.....') から始まり、php のコードで記述するものとする

<pre>
array(1) {
  ["a"]=>
  string(3) "b&g"
}
</pre>

<h2>問題2</h2>


callback.php での var_dump($_GET) の結果が以下のようになるように リダイレクト処理を実装してください
ただし リダイレクトは header('Location: http://localhost:8888/redirector.php?redirect=.....') から始まり、php のコードで記述するものとする

<pre>
array(1) {
  ["a&b&c"]=>
  string(5) "b f d"
}
</pre>

<h2>問題3</h2>


callback.php での var_dump($_GET) の結果が以下のようになるように リダイレクト処理を実装してください
ただし リダイレクトは header('Location: http://localhost:8888/redirector.php?redirect=.....') から始まり、php のコードで記述するものとする

<pre>
array(1) {
  ["a-=cd"]=>
  string(7) "x|y%20z"
}
</pre>

<h2>問題4</h2>


callback.php での var_dump($_GET) の結果が以下のようになるように リダイレクト処理を実装してください
ただし リダイレクトは header('Location: http://localhost:8888/redirector.php?redirect=.....') から始まり、php のコードで記述するものとする

<pre>
array(1) {
  ["                "]=>
  string(7) "%214%3z"
}
</pre>
