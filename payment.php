<!DOCTYPE html>
<html>

<head>
    <title>Transfer Payment</title>

        <style>
            body {
                background-image: url(https://static.vecteezy.com/system/resources/previews/000/580/917/non_2x/abstract-template-black-frame-layout-metallic-red-light-on-dark-background-futuristic-technology-concept-vector.jpg);
                background-size: cover;
                background-attachment: fixed;
            }
        </style>
</head>


</html>
<?php
include "display.php";
include "connection.php";

if (isset($_POST['submit'])) {
    $to = $_POST['to'];
    $from = $_POST['from'];
    $amount_transfer = $_POST['amount_transfer'];

    $to_update_money = 0;
    $from_update_money = 0;

    $query = "SELECT credit FROM user WHERE name = '$to'";
    $data = mysqli_query($conn, $query);
    $res1 = mysqli_fetch_array($data);

    $query = "SELECT credit FROM user WHERE name = '$from'";
    $data = mysqli_query($conn, $query);
    $res2 = mysqli_fetch_array($data);

    $to_update_money  = ($res1['credit'] + (int)$amount_transfer);
    $from_update_money  = ($res2['credit'] - (int)$amount_transfer);

    if ($_POST['to'] == 'null' && $_POST['from'] == 'null') {
        echo '<script>alert("ERROR, Enter correct Details");
                location.replace("transfer.php");
              </script>';
    } 
    else if ($_POST['to'] == 'null' || $_POST['from'] == 'null') {

        echo '<script>alert("ERROR, Enter Username");
                location.replace("transfer.php");
              </script>';        
    } 
    else if ((!(is_numeric($_POST['amount_transfer'])) || $_POST['amount_transfer'] == " ")) {
        echo '<script>alert("Error, Enter credits to transfer");
                location.replace("transfer.php");
              </script>'; 
     }
    else if ($_POST['to'] == $_POST['from']) {
        echo '<script>alert("ERROR, User cannot transfer to itself");
                location.replace("transfer.php");
              </script>';
    }
    else {
        $query = "update user set credit='$to_update_money' where name='$to'";
        mysqli_query($conn, $query);

        $query = "update user set credit='$from_update_money' where name='$from'";
        mysqli_query($conn, $query);

        $message = "Transfer Successful!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        
    }
}
?>


