<html>
<body>
<?php

include 'function1.php';
echo numbering();
// echo number\numbering();
?>

CREATE DATABASE opentutorials CHARACTER SET utf8 COLLATE utf8_general_ci;

<br/>
use opentutorials;
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