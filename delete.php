<?php
$conn = mysqli_connect('itf-lab-database.mysql.database.azure.com', 'pavarisa@itf-lab-database', '2002THtonhom', 'itflab');
$sql = 'DELETE FROM guestbook WHERE ID = ' . $_GET['ID'] . '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">

        <h3>
            <?php
            if (mysqli_query($conn, $sql)) {
                echo "Delete Completed";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
            ?>
        </h3>
        <a href="index.php" class="btn btn-danger mt-3">OK</a>

    </div>
</body>

</html>
