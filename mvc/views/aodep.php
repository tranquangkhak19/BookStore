<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #header, #footer{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Header</h1>
    </div>
    <div>

        <h1 style="color:<?php echo $data["color"] ?>;">ÁO ĐẸP</h1>
        <h1>
            <?php
                require_once "./mvc/views/pages/".$data["Page"].".php";
                echo $data["color"];
            ?>
        </h1>
    </div>
        
    <div id="footer">
        <h1>Footer</h1>
    </div>
</body>
</html>