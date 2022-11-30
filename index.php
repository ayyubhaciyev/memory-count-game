<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php require_once "controller.php"; ?>
</head>
<body>

<?php if($levelForm){ ?>
<form action="#" method="POST">
    <input type="radio" name="level" value="0" /> Asan
    <input type="radio" name="level" value="1" /> Çətin <br />
    <button name="levelSend">Ok</button>
</form>
<?php } ?>

<?php if($viewForm){ ?>
<form action="#" method="POST">
    <input type="number" name="number" min="1" max="10" />
    <button name="send">Ok</button>
</form>
<?php } ?>
<p><?= $message; ?></p>
<?php if(!$viewForm && !$levelForm){ ?>
   <a href="index.php"> <button>Yenidən oyna</button></a>
<?php } ?>
</body>
</html>