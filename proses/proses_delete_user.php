<?php
session_start();
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

if (!empty($_POST['input_user_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM tb_user WHERE id ='$id'");
    if ($query) {
        $message = '<script>alert("Data berhasil didelete");
                    window.location="../user"</script>';
    } else {
        $message = '<script>alert("Data gagal didelete");
                    window.location="../user"</script>';

    }
}
echo $message;
?>