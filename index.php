<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Store Commander - KMS France</title>
        <link rel="stylesheet" href="./mystyle.css">
    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost", "malek", "malekga", "my_test");
        if ($conn->connect_error) {
            die("Connection failed:". $conn->connect_error);
        }
        $sql = "SELECT * from utilisateur";
        $result = $conn->query($sql);
        if ($result->num_rows <= 0) {
            echo "0 result";
        }
        $conn->close();
        ?>



        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>email</th>
                <th>Date de naissance</th>
                <th>Pays</th>
                <th>Ville</th>
                <th>Code postal</th>
                <th>Nombre d'achat</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
            $save_result = $result;
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc()) {
                    ?>
                    <tr>    
                        <td contenteditable='true'>
                            <input placeholder="<?php echo $rows['id'];?>" name="id">
                        </td>
                        <td contenteditable='true'>
                            <input placeholder="<?php echo $rows['nom'];?>" name="nom">
                        </td>
                        <td contenteditable='true'>
                            <input placeholder="<?php echo $rows['prenom'];?>" name="prenom">
                        </td>
                        <td contenteditable='true'>
                            <input placeholder="<?php echo $rows['email'];?>" name="email">
                        </td>
                        <td contenteditable='true'>
                            <input placeholder="<?php echo $rows['date_naissance'];?>" name="date_naissance     ">
                        </td>
                        <td contenteditable='true'>
                            <input placeholder="<?php echo $rows['pays'];?>" name="pays">
                        </td>
                        <td contenteditable='true'>
                            <input placeholder="<?php echo $rows['ville'];?>" name="ville">
                        </td>
                        <td contenteditable='true'>
                            <input placeholder="<?php echo $rows['code_postal'];?>" name="code_postal">
                        </td>
                        <td contenteditable='true'>
                            <input placeholder="<?php echo $rows['nombre_achat'];?>" name="nombre_achat">
                        </td>
                    </tr>
            <?php
                    
                }
                # TODO faire une save de $result avant la "while" et ensuite la comparé avec l'ancienne save pour voir si il y a des changements
            ?>
        </table>
    </body>
</html>
