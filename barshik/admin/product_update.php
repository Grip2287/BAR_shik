<?php
include "../connect.php";
$id = isset($_POST['id'])?$_POST['id']:false;

$Name = isset($_POST['Name'])?$_POST['Name']:false;

$Categ = isset($_POST['cat'])?$_POST['cat']:false;

$Price = isset($_POST['Price'])?$_POST['Price']:false;

$Descr = isset($_POST['Desc'])?$_POST['Desc']:false;

$file = isset($_FILES['file'])?$_FILES['file']:false;


$product = mysqli_fetch_assoc(mysqli_query($con, "SELECT * from  `Product`  where Id_product = $id "));
$check_update = false;
$file_name = $file["name"];
$query_update = " UPDATE `Product` SET ";
if ($product["Name"] != $Name) {
    $query_update .= " `Name` = '$name', ";
    $check_update = true;
}
if ($product["Price"] != $Price) {
    $query_update .= " Price = '$Price', ";
    $check_update = true;
}
if ($product["cat"] != $cat) {
    $query_update .= " Category_id = '$cat', ";
    $check_update = true;
}
if ($product["Description"] != $Descr) {
  $query_update .= " Description = '$Descr', ";
  $check_update = true;
}
if ($product["Image"] != $file_name) {
    $query_update .= " Image = '$file_name', ";
    $check_update = true;
  }
  if ($check_update) {
    $query_update = substr($query_update, 0, -2);
    $query_update .= " WHERE Id_product = $id";
    $result = mysqli_query($conn, $query_update);
    if ($result) {
        echo check_error("Данные обновленны!", $id);
    }
} else {
    echo check_error("Данные актуальны!", $id);
}