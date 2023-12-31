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

        // request yg dilakukan ketika ingin mengolah atau memindahkan data
        echo $_GET["nama"];
        jarak();
        echo $_GET["password"];

        ?>

        <form action="index.php" method="get">
                <input type="text" name="nama">
                <input type="password" name="password">
                <input type="submit" name="submit">
        </form>
        <!-- action mau diarahkan ke halaman mana -->


<?php require_once("footer.php"); ?>

