<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>02</title>
<!--CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<!--JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="" method="get" accept-charset="utf-8">
        <input type="text" name="show" value="">
        <p><input type="submit" value="submit"></p>
    </form>
    value: <span id="write"></span>
<script>
    var show = '<?php echo htmlspecialchars(@$_GET['show'], ENT_QUOTES, 'UTF-8'); ?>';
    $('#write').append(show);
</script>
</body>
</html>
