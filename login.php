<?php
$email = $_POST["email"];
$password = $_POST["password"];

if($email == "naisya_najmi_28rpl@student.smktelkom-mlg.sch.id" && $password == "icha1234"){
    echo "<h2> Login Berhasil!!</h2>";
}
else {
    echo "<h2> Login Gagal!!</h2>";
}
?>