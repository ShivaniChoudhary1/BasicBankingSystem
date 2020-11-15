<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add User Information</title>

    <style>
        body {
            background-image: url(https://static.vecteezy.com/system/resources/previews/000/580/917/non_2x/abstract-template-black-frame-layout-metallic-red-light-on-dark-background-futuristic-technology-concept-vector.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {
            background-color: #008CBA;
        }

        /* Blue */
        .button2 {
            background-color: #008CBA;
        }

        /* Blue */
    </style>

</head>

</head>

<body>
    <p style="font-size: 32px; color: white" align="center">TO ADD USER FILL BELOW INFORMATIONS<b><br></p>


    <form action="#" method="POST" align="center" autocomplete="off">
        <div class="adduser">
            <br>
            <form action="#" method="POST" align="center" autocomplete="off">
                <div class="adduser">
                    <tr>
                        <td for="name" align="center">
                            <p style="font-size: 32px; color:white">Name-<input class="myform" type="text" id="name" name="name1" placeholder="Username" required="">
                        </td><br><br>
                    </tr>
                    <tr>
                        <td for="email" align="center">Email-<input class="myform" type="text" id="email" name="email1" placeholder="Email" required=""></td><br><br>
                    </tr>
                    <tr>
                        <td for="credit" align="center">Credits-<input class="myform" type="text" id="credit" name="credit1" placeholder="Credits" required=""></td><br><br>
                    </tr>
                    <button class="button button2"><a href="index.html">Back</a></button>
                    <button class="button button1" type="submit" name="adduser">Add details</button>
                </div>
            </form>

        </div>
</body>

</html>


<?php
if (isset($_POST['adduser'])) {
    $name = $_POST['name1'];
    $email = $_POST['email1'];
    $credit = $_POST['credit1'];
    $query = "INSERT INTO user(name,email,credit) VALUES('$name','$email','$credit')";
    $result = mysqli_query($conn, $query);

?>
    <script>
        alert("User Successfully added");
        location.replace("index.html");
    </script>
<?php
}

?>



?>
