<?php
    include './Conn.php';
    
    $getData =  $db->prepare("SELECT * FROM images");
    $getData->execute();
    $number = 0; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SetForm.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="image_location">
        </div>
        <div>
            <button type="submit" name="gonder">SUBMIT</button>
        </div>
    </form>

    <div>
        <?php while($myImages = $getData->fetch(PDO::FETCH_ASSOC)){ $number++;?>
            <img src="<?php echo $myImages['image_location'] ?>" alt="">
        <?php }?>
    </div>
</body>
</html>