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

<?php require_once("footer.php"); ?>

<!-- include walau error jika filenya gaada maka script selain yg error akan tetap muncul (opsional) jadi eksekusi kode ttp dilanjutkan -->
<!-- pada require yg dilihat hanya error (wajib ada filenya) jadi eksekusi kode tidak akan dilanjutkan -->
<!-- require_once untuk mencegah duplikasi jika require tertulis berulang -->
<!-- include_once juga ada -->