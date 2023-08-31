<?php
require_once('PhpConnect.php');
// Hash the admin password
$adminPassword1 = "21201362";
$hashedAdminPassword1 = password_hash($adminPassword1, PASSWORD_DEFAULT);
$sql1 = "UPDATE Admin SET Password = '$hashedAdminPassword1' WHERE User_ID = 'A233'";
if (mysqli_query($conn, $sql1)) {
        echo "Hashed admin password: " . $hashedAdminPassword1;
}
$adminPassword2 = "21201153";
$hashedAdminPassword2 = password_hash($adminPassword2, PASSWORD_DEFAULT);
$sql2 = "UPDATE Admin SET Password = '$hashedAdminPassword2' WHERE User_ID = 'A579'";
if (mysqli_query($conn, $sql2)) {
        echo "Hashed admin password: " . $hashedAdminPassword2;
}
$adminPassword3 = "21201446";
$hashedAdminPassword3 = password_hash($adminPassword3, PASSWORD_DEFAULT);
$sql3 = "UPDATE Admin SET Password = '$hashedAdminPassword3' WHERE User_ID = 'A584'";
if (mysqli_query($conn, $sql3)) {
        echo "Hashed admin password: " . $hashedAdminPassword3;
}
$adminPassword4 = "21301075";
$hashedAdminPassword4 = password_hash($adminPassword4, PASSWORD_DEFAULT);
$sql4 = "UPDATE Admin SET Password = '$hashedAdminPassword4' WHERE User_ID = 'A984'";
if (mysqli_query($conn, $sql4)) {
        echo "Hashed admin password: " . $hashedAdminPassword4;
}
$adminPassword5 = "21201018";
$hashedAdminPassword5 = password_hash($adminPassword5, PASSWORD_DEFAULT);
$sql5 = "UPDATE Admin SET Password = '$hashedAdminPassword5' WHERE User_ID = 'A769'";
if (mysqli_query($conn, $sql5)) {
        echo "Hashed admin password: " . $hashedAdminPassword5;
}
?>
