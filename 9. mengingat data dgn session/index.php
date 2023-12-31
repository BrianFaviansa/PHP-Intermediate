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

        // setiap menggunakan method dari sesion, harus distart dulu
        session_start();

        $user = "ucup";
        $password = "123";

        if(isset($_POST["submit"])){
                if($_POST["nama"] == $user && $_POST["password"] == $password) {
                        // cookie => cara menyimpan data ke browser client
                        // setcookie(key, nilai, expire)
                        setcookie("nama_user", $_POST["nama"], time()+3600);

                        // session => menyimpan data dalam server
                        $_SESSION["nama_user"] = $_POST["nama"];

                        // memindahkan halaman / redirect
                        header('Location: profile.php');

                } else {
                        echo "login gagal";
                }
        }

        ?>


        <form action="profile.php" method="post">
                <input type="text" name="nama">
                <input type="password" name="password">
                <input type="submit" name="submit">
        </form>



<?php require_once("footer.php"); ?>

