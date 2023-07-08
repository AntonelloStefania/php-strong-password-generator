<?php


include 'function.php';

if(isset($_GET['pswLength'])){
    $passwordLength = $_GET['pswLength'];
    $allowDuplicates = $_GET['allow-duplicates'] === '1' ? true : false;
    $characters = isset($_GET['characters']) ? $_GET['characters'] : array();
    
    $response = generatePassword($passwordLength, $allowDuplicates, $characters);
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
    <form class="d-flex" action="index.php" method="GET">
        <div class="form-group col-3">
            <label for="inputPassword2" class="sr-only">Password length</label>
            <input name="pswLength" type="number" min="5" class="form-control" id="inputPassword2" placeholder="Password char number">
        </div>
        <div class="form-group d-flex">
            <button type="submit" class="btn btn-primary ms-3 align-self-end">Send</button>
            <button class="btn btn-danger ms-3 align-self-end">Annulla</button>
        </div>
        <div class="ms-5"> 
            <fieldset>
                <legend>Consenti caratteri speciali:</legend>
                <div class="form-check">
                    <label for="allow-duplicates-yes">Si</label>
                    <input type="radio" class="form-check-input" name="allow-duplicates" id="allow-duplicates" value="1" checked>
                </div>
                <div class="form-check">
                    <label for="allow-duplicates-not">No</label>
                    <input type="radio" class="form-check-input" name="allow-duplicates" id="allow-duplicates" value="0">
                </div>
            </fieldset>
            <div class="row">
                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" id="char" name="characters[]" class="form-check-input" value="L">
                        <label for="char">Lettere</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="char" name="characters[]" class="form-check-input" value="N">
                        <label for="char">Numeri</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="char" name="characters[]" class="form-check-input" value="C">
                        <label for="char">Caratteri speciali</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>