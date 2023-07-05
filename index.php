<?php

include 'function.php'

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
    <form class="d-flex  " action="index.php" method="GET">
        <div class="form-group col-3 ">
            <label for="inputPassword2" class="sr-only" >Password length</label>
            <input name="psw-length" type="number" min=5 class="form-control" id="inputPassword2" placeholder="Password char number">
        </div>
        <!-- <div class="form-group align-self-end pb-2 ms-3">
            <label for="repeatedChar">permettere charatteri ripetuti?</label>
            <input class="form-check-input" type="checkbox" id="repeatedChar" name="repeatedChar" >
        </div> -->
        <div class="form-group d-flex">
            <button type="submit" class="btn btn-primary ms-3 align-self-end ">send</button>
            <button class="btn btn-danger ms-3 align-self-end">annulla</button>
        </div>
    </form>
    <div>
        <?php if(isset($_GET['psw-length']) && $_GET['psw-length'] != ''){ ?>
            <span><?php echo randomPasswordGen()?></span>
        <?php }?>
    </div>
    
</body>
</html>