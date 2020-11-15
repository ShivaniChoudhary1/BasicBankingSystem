<!Doctype html>
<html>

<head>
    <title>Users-page</title>


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

    <?php
    include("connection.php");
    error_reporting(0);
    ?>
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

            .button2 {
                background-color: #008CBA;
            }

            /* Blue */
        </style>



</head>

<body>

    <?php
    $query = "SELECT * FROM user";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    if ($total != 0) {
    ?>
        <div class="container">
            <div class="list-group">
                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                ?>
                    <a class="list-group-item list-group-item-action flex-column align-items-start" href='display.php?id=<?php echo $result['id']; ?>'>
                <?php echo $result['name'];
                }
            } else {
                echo "No Record Found";
            }
                ?>
                    </a>
            </div>
            <?php
            if (isset($_GET["id"])) {
                $id  = $_GET["id"];
            } else {
                $id = 0;
            };
            $data = mysqli_query($conn, "SELECT * FROM user WHERE id=$id ");
            $total = mysqli_num_rows($data);
            $result = mysqli_fetch_array($data);
            ?>

            <div class="col-sm-6">
                <div class="panel-heading">
                    <h3 class="panel-title"><p style="font-size: 32px; color:white">USER DETAILS-</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-responsive table-user-information">
                        <tbody>
                            <tr>
                                <td><p style="font-size: 32px; color:white">ID-</td>
                                <td><p style="font-size: 32px; color:white">
                                    <?php $val = isset($result['id']) ? $result['id'] : 0;
                                    echo $val; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><p style="font-size: 32px; color:white">Name-</td>
                                <td><p style="font-size: 32px; color:white">
                                    <?php $val = isset($result['name']) ? $result['name'] : 0;
                                    echo $val; ?>

                                </td>
                            </tr>
                            <tr>
                                <td><p style="font-size: 32px; color:white">Email-</td>
                                <td><p style="font-size: 32px; color:white">
                                    <?php $val = isset($result['email']) ? $result['email'] : 0;
                                    echo $val; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><p style="font-size: 32px; color:white">Credits-</td>
                                <td><p style="font-size: 32px; color:white">
                                    <?php $val = isset($result['credit']) ? $result['credit'] : 0;
                                    echo $val; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <button class="button"><a href="index.html">Back</a></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

                 
        </div>
        
</body>


</html>
