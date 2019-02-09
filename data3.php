<html>
<body>
/data1.php?id=123123&password=111111
<?php
echo $_POST['id'].','.$_POST['password'];
?>
    <form method="get" action="data1.php">
        id :  <input type="text" name="id" />
        password :  <input type="text" name="password" />
        <input type="submit" />
    </form>
</body>
</html>