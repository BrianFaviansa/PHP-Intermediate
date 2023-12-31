<?php //require("header.php"); ?>
<?php require_once("header.php"); ?>

        <main>  
                Selamat datang di belajar koding, tempat belajar pemrograman web dari dasar
        </main>

        <h2>trim dan strip tags</h2>
        
        <?php
        function jarak(){
                echo "<br>";
        }

        $text = " ini adalah input user ";

        echo "sebelum". $text. "disini";
        jarak();
        echo "sesudah". trim($text). "disini";
        jarak();
        echo "sesudah". ltrim($text). "disini";
        jarak();
        echo "sesudah". rtrim($text). "disini";
        jarak();

        // strip_tags

        $text2 = "<script>alert('halo semuanya!)</script>";
        $text3 = "<b> Halo </b> semuanya";                
        echo strip_tags($text2);
        jarak();
        echo strip_tags($text3 , "<b>");




        
        ?>

<?php require_once("footer.php"); ?>

