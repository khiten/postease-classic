# POSTEASE install type

:earth_americas: [POSTEASE install type](https://classic.postease.org)

## 概要 / Outline
:jp: POSTEASE install type はAPI接続式の超軽量ヘッドレスCMSです。  

:us: 'POSTEASE install type' is an ultra-lightweight headless CMS with API connection.


## 特徴 / Features

### 1. レガシー環境で動作 / Works in a legacy environment
:jp: POSTEASE install type はレガシーなサーバ環境でも動作します。PHPバージョン5.1以上（最新版まで）で動作します。

:us: 'POSTEASE install type' also works in a legacy server environment. It works with PHP version 5.1 or higher (up to the latest version).

### 2. データベースサーバ不要 / No database server required
:jp: POSTEASE install type は、MySQL または SQLite で実行されます。

:us: 'POSTEASE install type' run with MySQL or SQLite.

### 3. XML-RPCとJSONをサポート / Support for XML-RPC and JSON
:jp: POSTEASE install type は XML-RPC もしくは json 形式でのデータ取得をサポートしています。PHP もしくは javascript ( jQuery ) で実装できます。

:us: 'POSTEASE install type' supports data retrieval in XML-RPC or JSON format. Can be implemented in PHP or JavaScript (jQuery).


## サーバ要件 / Server requirements

- \>=PHP5.1
- SQLite3.x or MySQL5.x
- PHP FTP-extension (ftp.so)


## ダウンロード / Download

```sh
git clone git@github.com:postease-classic/postease.git
```


## 実装 / Implements

Constitute Example
```
/*
 * root
 *  |
 *  |-- postease
 *  |
 *  |-- index.php
 *
 */
```


index.php
```php
require_once dirname(__FILE__) . '/postease/api/local.php';

$posts = get_posts();
```




## 最新バージョン / Latest version

**2.9.1 ( 16.Nov.2018 )**

---

#### Update History
- 2.9.1 ( 16.Nov.2018 )
- 2.9.0 ( 15.Nov.2018 )
- 2.8.16 ( 07.Nov.2018 )
- 2.8.15 ( 06.Nov.2018 )
- 2.8.14 ( 05.Nov.2018 )
- 2.8.13 ( 01.Nov.2018 )
- 2.8.12 ( 27.Oct.2018 )
- 2.8.11 ( 27.Oct.2018 )
- 2.8.10 ( 21.Oct.2018 )
- 2.8.9 ( 21.Oct.2018 )
- 2.8.8 ( 12.Aug.2018 )
- 2.8.7 ( 10.Aug.2018 )
- 2.8.6 ( 31.Jul.2018 )
- 2.8.5 ( 30.Jul.2018 )
- 2.8.4 ( 29.Jul.2018 )
- 2.8.3 ( 29.Jul.2018 )
- 2.8.2 ( 29.Jul.2018 )
- 2.8.1 ( 29.Jul.2018 )
- 2.8.0 ( 28.Jul.2018 )
- 2.7.4 ( 13.Jun.2018 )
- 2.7.3 ( 11.Jun.2018 )
- 2.7.2 ( 01.Jun.2018 ) 
- 2.7.1 ( 27.May.2018 )
- 2.7.0 ( 27.May.2018 )
- 2.6.1 ( 23.May.2018 )
- 2.6.0 ( 22.May.2018 )
- 2.5.1 ( 21.May.2018 )
- 2.5.0 ( 20.May.2018 )
- 2.4.7 ( 11.May.2018 )
- 2.4.6 ( 13.Apr.2018 )
- 2.4.5 ( 09.Feb.2018 )
- 2.4.4 ( 02.Aug.2017 )
- 2.4.3 ( 21.Jul.2017 )
- 2.4.2 ( 01.Jul.2017 )
- 2.4.1 ( 21.Jun.2017 )
- 2.4.0 ( 21.Jun.2017 )
- 2.3.2 ( 23.May.2017 )
- 2.3.1 ( 20.May.2017 )
- 2.3.0 ( 20.May.2017 )
- 2.2.0 ( 04.May.2017, as production )
- 2.1.x ( 03.Nov.2015 )
- 2.0.x ( 02.Nov.2015, as beta )
