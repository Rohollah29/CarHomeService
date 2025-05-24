<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $nname = $_POST['first_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $brand = $_POST['brand'];
    $license = $_POST['license'];
    $chk = "";
    foreach ($_POST['chk'] as $chk1) {
        $chk .= $chk1 . " ";
    }
    $sql = "INSERT INTO information (nname, email, phone, brand, license, chk) VALUES ('$nname', '$email', '$phone', '$brand', '$license', '$chk')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New record inserted');</script>";
    } else {
        echo "error " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
