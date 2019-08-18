<?php

    require_once "dbh.inc.php";


    $hos_name = $_POST['hospitalName'];
    $hos_city = $_POST['hospitalCity'];
    $hos_address = $_POST['hospitalAddress'];
    $hos_email = $_POST['hospitalEmail'];
    $hos_phone = $_POST['hospitalPhone'];




    $sql = "INSERT INTO hospitals (hos_name,hos_city,hos_address,hos_email,hos_phone)
    VALUES ('$hos_name','$hos_city','$hos_address','$hos_email','$hos_phone')";
    if (mysqli_query($conn, $sql)) {
      header('Location: ../addHospital.php?doctor=addedsuccessfully');
      exit();
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>
