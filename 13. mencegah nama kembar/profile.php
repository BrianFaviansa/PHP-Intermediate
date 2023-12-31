<?php 
    session_start();

    if(isset($_SESSION["nama_user"])) {
        echo "ini halaman profil ". $_SESSION["nama_user"];
    } else {
        echo "login dulu gan";
    }

    // cara menghapus cookie dengan nilai - pada time
    setcookie("nama_user", $_POST["nama"], time()-3600);
?>

<br>
<a href="logout.php">logout disini</a>