<?php
    require_once "include\database_connection.php";

    try{
        $sql = "SELECT * FROM patient";

        $stmt = $connection->prepare($sql);

        $success = $stmt->execute();

        if(!$success) {
            throw new Exception("failed to retrieve patients");
        }
        else {
            $patients = $stmt->fetchAll();
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
            <a href="patient_view_all.php" class="nav-item active">Patients</a>
            <a href="contact_us.php" class="nav-item">Contact</a>
            <a href="about_us.php" class="nav-item">About</a>
        </div>
    </nav>

    <main class="main">
        <form method="post">
            <h1 class="mt-1 mb-1">List of patients</h1>
                
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($patients as $patient){ ?>
                        <tr>
                        <td><input type="radio" name="id" value="<?= $patient["id"] ?>"></td>
                        <td>
                            <a href="patient_view.php?id=<?= $patient["id"] ?>"><?= $patient["name"] ?></a>
                        </td>
                        <td><?= $patient["address"] ?></td>
                        <td><?= $patient["phone"] ?></td>
                        <td><?= $patient["email"] ?></td>
                    </tr> 
                    <?php } ?>
                

                </tbody>
            </table>
            <div class="mt-1 buttons">
                <button class="button warning" type="submit" formaction="patient_update_form.php">Update</button> or
                <button class="button danger" type="submit" formaction="patient_delete_form.php">Delete</button> selected patient or
                <a class="button primary" href="patient_create_form.php">Create</a> new patient.
            </div>
        </form>
    </main>

    <footer class="footer">
        <p>&copy; 2022, all rights reserved.</p>
    </footer>
</body>
</html>