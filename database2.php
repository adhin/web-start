<html>
<body>
<?php

include 'function1.php';
echo numbering();
// echo number\numbering();
?>
D:\BitNami\wampstack-5.4.21-0\php일 경우 D:\BitNami\wampstack-5.4.21-0\php\php.ini 파일을 열고 아래의 코드 앞의 ;을 제거
<br/>

extension=php_pdo_mysql.dll
<br/>
extension_dir = "D:\BitNami\wampstack-5.4.21-0\php\ext"

<br/>

CREATE DATABASE myboards CHARACTER SET utf8 COLLATE utf8_general_ci;

<br/>
SHOW DATABASES;

<br/>

use myboards;
<br/>

Applications/mampstack-5.6.40-0/mysql/bin/mysql -uroot -palsdudsla1 -hlocalhost
<br/>

CREATE TABLE topic (
    id  int(11) NOT NULL AUTO_INCREMENT,
    title  varchar(255) NOT NULL ,
    description  text NULL ,
    created  datetime NOT NULL ,
    PRIMARY KEY (id)
);
</body>
</html>