<html lang="en">

<head>
    <title>ExameLAB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'pornpaisan112.mysql.database.azure.com', 'pps112@pornpaisan112', 'Pornpaisan112', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM ExameLAB');
?>
    <table width="150" border="1" class="table table-dark table-striped" class="center" class="ex1">
        <tr class="info">
            <th width="100">
                <div align="center">Product </div>
            </th>
            <th width="150">
                <div align="center">Price </div>
            </th>
            <th width="150">
                <div align="center">Amount </div>
            </th>
            <th width="150">
                <div align="center">Total</div>
            </th>
        </tr>
        <?php
while($Result = mysqli_fetch_array($res))
{
?>
        <tr>
            <td><?php echo $Result['Product'];?></div>
            </td>
            <td><?php echo $Result['Price'];?></td>
            <td><?php echo $Result['Amount'];?></td>
            <td><?php echo $Result['Total'];?></td>
        </tr>
        <?php
}
?>
    </table>
    <?php
mysqli_close($conn);
?>
</body>

</html>
