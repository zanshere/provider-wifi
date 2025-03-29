<?php 
    include './config/database.php';
    include './includes/header.php';

    $stmt = $conn->query("SELECT * FROM user");

    $data = $stmt->fetch_assoc();

    foreach($data as $row){
        echo "ID : " . $row["id"] . " - Username : " . $row['user'] . "<br>";
    }

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>



    <!-- Footer -->
     <?php include './includes/footer.php';?>

     <!-- ScrollReveal -->
    <script src="https://unpkg.com/srollreveal"></script>
    <!-- Javascript -->
     <script src="./assets/js/main.js"></script>
</body>
</html>