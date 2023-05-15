<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name ="text"><button>Generate</button>
    
       
    </form>
    <?php if(!empty($_POST['text'])): ?>
        <img src="qrcode.php?text=<?php echo $_POST['text']?>" alt="">
        <?php endif ?>  
</body>
</html>