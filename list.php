<?php
require_once 'connect.php';

$sql = "SELECT * From tebel01";
$result = mysql_query($sql)
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>List</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
            <?php
            while ( $fetch = mysql_fetch_assoc($result)){
             ?> 
            <tr>
                <td><?php echo $fetch['id'];?></td>
                <td><?php echo $fetch['name'];?></td>
                <td>
                    <a href ="from.php?id=<?php echo $fetch['id'];?>">edit</a> 
                    <a href ="">Delete</a>
                </td>
            </tr>
            <?php
            }
           ?>
        </table>
    </body>
</html>
