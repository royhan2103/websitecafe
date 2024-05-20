<?php
session_start();
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$foto = (isset($_POST['foto'])) ? htmlentities($_POST['foto']) : "";

if (!empty($_POST['input_user_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM tb_daftar_menu WHERE id ='$id'");
    if ($query) {
        unlink("../assets/img/daftar_menu/$foto");
        $message = '<script>alert("Menu berhasil didelete");
                    window.location="../menu"</script>';
    } else {
        $message = '<script>alert("Menu gagal didelete")</script>;
                    window.location="../menu"</script>';

    }
}
echo $message;
?>