<?php
    include './Conn.php';
    if(isset($_FILES)){
        $file_name = $_FILES['image_location']['name'];
        $file_size = $_FILES['image_location']['size'];
        $file_tpnm = $_FILES['image_location']['tmp_name'];
        $file_lctn = "../Resimler/".$file_name;
        @move_uploaded_file($file_tpnm,$file_lctn);
        $insert = $db->prepare("INSERT INTO images SET image_location=:image_location");
        $save_img = $insert->execute([
            'image_location'=>$file_lctn
        ]);

        if($save_img){
            header('Location:Form.php?SaveImg=IsSccs');
            exit;
        }

    }else{
        echo "Herhangi bir dosya yüklenmemiş...";
    }
?>