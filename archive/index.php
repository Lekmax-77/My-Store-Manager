<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Store Commander - KMS France</title>
        <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <h1>4</h1>
        <table>
            <tr>ID</tr>
            <tr>Nom</tr>
            <tr>Prenom</tr>
            <tr>email</tr>
            <tr>Date de naissance</tr>
            <tr>Pays</tr>
            <tr>Ville</tr>
            <tr>Code postal</tr>
            <tr>Nombre d'achat</tr>
        </table>
        <?php
        $conn = mysqli_connect("localhost", "malek", "malekga", "my_test");
        if ($conn->connect_error) {
            die("Connection failed:". $conn->connect_error);
        }
        $sql = "SELECT * from utilisateur";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>". $row["id"]."</td><td>" .$row["prenom"]. "</td><td>". $row["email"] ."</td><td>". $row["date_naissance"]. "</td><td>". $row["pays"]. "</td><td>". $row["ville"]. "</td><td>". $row["code_postal"]. "</td><td>". $row["nombre_achat"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 result";
        }
        $conn->close();
        ?>
    </body>
</html>
