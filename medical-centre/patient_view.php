<?php
    require_once "include\database_connection.php";
    // get patient // 
    try{
        $params = array(
            'id'=> $_GET['id']
        );
        

        $sql = "SELECT * FROM patient WHERE id = :id";

        $stmt = $connection->prepare($sql);

        $success = $stmt->execute($params);

        if(!$success) {
            throw new Exception("failed to retrieve patients with id: ". $_GET ['id'] );
        }
        else {
            $patient = $stmt->fetch();
        }
    }
    catch(Exception $e){
        echo "Error" . $e->getMessage();
    }
    // getting the centre //
    try{
        $params = array(
            'id'=> $patient['centre_id']
        );
        

        $sql = "SELECT * FROM medical_centre WHERE id = :id";

        $stmt = $connection->prepare($sql);

        $success = $stmt->execute($params);

        if(!$success) {
            throw new Exception("failed to retrieve centre with id: ". $patient['centre_id'] );
        }
        else {
            $centre = $stmt->fetch();
        }
    }
    catch(Exception $e){
        echo "Error" . $e->getMessage();
    }

    $connection = null;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>ABC HealthCare</title>
</head>
<body class="container flex flex-column">
    <header class="header"></header>

    <nav>
        <div class="nav">
            <a href="index.php" class="nav-item">Home</a>
            <a href="centre_view_all.php" class="nav-item">Centres</a>
            <a href="patient_view_all.php" class="nav-item">Patients</a>
            <a href="contact_us.php" class="nav-item">Contact</a>
            <a href="about_us.php" class="nav-item">About</a>
        </div>
    </nav>

    <main class="main">
        <h1 class="mt-1 mb-1"><?= $patient["name"] ?></h1>
            
        <table class="table">
            <tbody>
                <tr>
                    <th>Address</th>
                    <td><?= $patient["address"]; ?></td>
                    <td rowspan="7" class="centered">
                        <img src="images/default_patient.png" alt="Default patient image">
                    </td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?= $patient["phone"]; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <a href= <?= $patient["email"]; ?>>
                        <?= $patient["email"]; ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Date of birth</th>
                    <td><?= $patient["dob"]; ?></td>
                </tr>
                <tr>
                    <th>Medical insurance</th>
                    <td><?= $patient["insurance"]; ?></td>
                </tr>
                <tr>
                    <th>Preferences</th>
                    <td><?= $patient["preferences"]; ?></td>
                </tr>
                <tr>
                    <th>Medical centre</th>
                    <td><?= $centre["title"]; ?></td>
                </tr>
            </tbody>
        </table>

        <form method="post">
            <div class="mt-1 buttons">
                <button type="submit" class="button warning" formaction="patient_update_form.php">Update</button>
                <button type="submit" class="button danger" formaction="patient_delete_form.php">Delete</button>
            </div>
            <input type="hidden" name="id" value="<?= $patient['id'] ?>">
        </form>
    </main>

    <footer class="footer">
        <p>&copy; 2022, all rights reserved.</p>
    </footer>
</body>
</html>
