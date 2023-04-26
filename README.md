# Attention!!

脆弱性の確認用のソースコードです。検証以外で使わないでねっ！

# 起動


```
docker compose up -d
```


# 確認


- http://localhost:8888/01.php
- http://localhost:8888/02.php
- http://localhost:8888/03.php
- http://localhost:8888/rawurlencode.php

# ログ確認

tail で流れます

```
docker compose logs -f -- php-apache
```
