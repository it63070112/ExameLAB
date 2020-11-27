<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add values</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Add values</h2>
        <form action="show.php" method="post" >
            <div class="form-group">
                ชื่อสินค้า
                <input type="text" class="form-control"  name="Product" placeholder="Enter Product"> <br>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="Price">ราคาต่อหน่วย:</label>
                    <input type="text" class="form-control" name="Price" placeholder="Enter Number"> <br>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    จำนวน
                    <input type="text" class="form-control" name="Amout" placeholder="Enter Number"> <br>
                </div>
            </div>
            <input type="submit" id="commentBtn" class="btn btn-primary">
            <a href="showtest.php" class="btn btn-danger">Cancel</a>
        </form>
    </div>

</body>

</html>
