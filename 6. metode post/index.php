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


        // if (isset($_GET["submit"])) {
        //         echo $_GET["nama"];
        //         jarak();
        //         echo $_GET["password"];
        // } 

        if (isset($_POST["submit"])) {
                echo $_POST["nama"];
                jarak();
                echo $_POST["password"];
        } 

        ?>

        <!-- <form action="index.php" method="post">
                <input type="text" name="nama">
                <input type="password" name="password">
                <input type="submit" name="submit">
        </form> -->

        <form action="profile.php" method="get">
                <input type="text" name="nama">
                <input type="password" name="password">
                <input type="submit" name="submit">
        </form>
        <!-- action mau diarahkan ke halaman mana -->


<?php require_once("footer.php"); ?>

