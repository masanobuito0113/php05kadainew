<?php include('header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="../model/insert.php" enctype="form-data">

            <div class="mb-3">
                <label for="" class="">名前:</label>
                <input class="w-50" type="text" name="name">
            </div>
            <div class="mb-3">
                <label for="" class="">住所:</label>
                <input class="w-50" type="text" name="adress">
            </div>
            <div class="mb-1">
                <label for="" class="">電話番号:</label>
                <input class="w-50" id="text" name="tel">
            </div>


            </div>
            <div class=" mb-1">
                <button type=" submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
</body>
</html>
