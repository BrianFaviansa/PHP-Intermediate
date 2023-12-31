<?php 
    echo "ini halaman profil ". $_COOKIE["nama_user"];

    // cara menghapus cookie dengan nilai - pada time
    setcookie("nama_user", $_POST["nama"], time()-3600);
?>