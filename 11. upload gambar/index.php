<?php //require("header.php"); ?>
<?php require_once("header.php"); ?>

        <main>  
                Selamat datang di belajar koding, tempat belajar pemrograman web dari dasar
        </main>

        <h2>upload gambar</h2>
        
        <?php
        if (isset($_POST["submit"])){
                // var_dump($_FILES);
                // print_r($FILES["gambar"]);
                // echo $_FILES["gambar"]["name"];

                $nama = $_FILES["gambar"]["name"];
                $loc = $_FILES["gambar"]["tmp_name"];

                // move_uploaded_file(asal, tujuan)
                move_uploaded_file($loc, "upload/". $nama);
        }

        ?>


        <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="file" name="gambar">
                <input type="submit" name="submit" value="upload">
        </form>



<?php require_once("footer.php"); ?>

