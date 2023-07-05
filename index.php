<?php


if(isset($_GET['psw-length']) && $_GET['psw-length'] != ''){
    function randomPasswordGen() {
        $pswLength = $_GET['psw-length'];
        $allowedChar = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = [];
        $charLength = strlen($allowedChar) -1;
        for ($i = 0; $i < $pswLength; $i++) {
            $n = rand(0, $charLength);
            $pass[] = $allowedChar[$n];
        }
        return implode($pass);
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="form-group">
        <form action="index.php" method="GET">
            <input type="number" min=5 name="psw-length">
            <button type="submit" class="btn btn-success">invia</button>
            <button name='reset' type="reset" value='Reset' class="btn btn-danger">reset</button>
        </form>
    </div>
    <div>
        <?php if(isset($_GET['psw-length']) && $_GET['psw-length'] != ''){ ?>
            <span><?php echo randomPasswordGen()?></span>
        <?php }?>
    </div>
    
</body>
</html>