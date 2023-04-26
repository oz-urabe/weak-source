<?php

if (isset($_GET['redirect']) && strpos($_GET['redirect'], 'http://localhost:8888/callback.php') === 0) {
    header('Location: ' . $_GET['redirect']);
    exit;
}

echo 'リダイレクトできるURLではありません',PHP_EOL;
