<?php //require("header.php"); ?>
<?php require_once("header.php"); ?>

        <main>  
                Selamat datang di belajar koding, tempat belajar pemrograman web dari dasar
        </main>

        <h2>implode dan exlode</h2>

        <?php
        // implode(separator, array
        $pekerjaan = ["programmer", "designer", "tester"];
        echo implode(" | ", $pekerjaan);

        echo "<br>";

        // explode(separator, array, batasan yg mau dijadikan array(opsional))
        $pelajaran = "html css js php";
        print_r(explode(" ", $pelajaran));
        ?>

        <h2>fungsi date</h2>

        <?php
        echo date("d - F - Y");
        ?>

<?php require_once("footer.php"); ?>

