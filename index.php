<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<?php
    include_once("connection.php");
?>
<body>
    <table width="500" border="1" >
        <tr>
                <th><strong>ID</strong></th>
                <th><strong>Name</strong></th>
                <th><strong>Age</strong></th>
        </tr>
        <tbody>
        <?php
            $id=1;
            $result=pg_query($conn,"Select * from customer");
            while($row=pg_fetch_array($result,NULL, PGSQL_ASSOC))
            {
            ?>
			<tr>
              <td><?php echo $row["cusid"];?></td>
              <td><?php echo $row["cusname"];?></td>
              <td><?php echo $row["phone"];?></td>
            </tr>
            <?php $id++;}?>
            </tbody>
    </table>
</body>
</html>