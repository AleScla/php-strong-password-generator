<?php
 include 'functions.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PSW Generator</title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <h1>psw Generator sicuro</h1>
            <label for="psw-gen">Inserisci qui la psw da rendere sicura</label>
            <input type="text" name="psw-gen" id="psw-gen">
            <button type="submit">Genera la tua password sicura</button>
        </form>
        
        <?php
            if(isset($_GET['psw-gen'])){
        ?>
            <p>
                Tu hai scritto: <?php echo $_GET['psw-gen']?>
            </p>
            <p>
                PSW CRIPTATA: <?php pswGenerator()?>
            </p>
        <?php      
            }
        ?>
        
    </body>
</html>