<?php
require_once 'connect.php';

$sql = "SELECT * From tebel01 WHERE ";
$result = mysql_query($sql)
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>From</title>
    </head>
    <body>
        <h3>From</h3>
        <from name="frm" method="post" action="save.php">
            <label>ID</label><input type="text" name="id"/><br />
           <label>name</label><input type="text" name="name"/><br />
           <input type="submit" name="save"value="save">
           </from>
    </body>
</html>
