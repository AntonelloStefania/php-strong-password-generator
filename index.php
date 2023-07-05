<?php
if(isset($_GET['psw-length']) && $_GET['psw-length'] != ''){

    $pswLength = $_GET['psw-length'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-group">
        <form action="index.php" method="GET">
            <input type="number" min=5 name="psw-length">
            <button type="submit">invia</button>
        </form>
    </div>
    <div>
        <?php if(isset($_GET['psw-length']) && $_GET['psw-length'] != ''){ ?>
            <span><?php echo $pswLength?></span>
        <?php }?>
    </div>
    
</body>
</html>