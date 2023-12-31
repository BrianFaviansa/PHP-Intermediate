<?php //require("header.php"); ?>
<?php require_once("header.php"); ?>

        <main>  
                Selamat datang di belajar koding, tempat belajar pemrograman web dari dasar
        </main>

        <h2>upload gambar</h2>
        
<?php

if (isset($_POST["submit"])){

        $time = time();
        $nama   = $_FILES["gambar"]["name"];
        $error  = $_FILES["gambar"]["error"];
        $size   = $_FILES["gambar"]["size"];
        $loc    = $_FILES["gambar"]["tmp_name"];
        $format = $_FILES["gambar"]["type"];
        $namaFile = "upload/". $nama;

        $format2 = pathinfo($nama, PATHINFO_EXTENSION);
        die($format2);

        // validasi
        if( $error == 0) {
                // satuannya dalam byte
                if($size < 1000000) {
                        if ($format2 == "jpg" || $format2 == "png") {

                                if(file_exists($namaFile)) {
                                        $namaFile = str_replace(".jpg", "", $namaFile);
                                        $namaFile = $namaFile. "_". $time. ".jpg";
                                }
                                // mengupload
                                move_uploaded_file($loc, $namaFile);
                                echo "berhasil upload";
                                }
                        } else {
                                echo "formatnya harus jpg / png";
                        }
                } else {
                        echo "gambarnya kegedean";
                }
        } else {
                echo "ada error";
        }


?>


        <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="file" name="gambar">
                <input type="submit" name="submit" value="upload">
        </form>



<?php require_once("footer.php"); ?>

