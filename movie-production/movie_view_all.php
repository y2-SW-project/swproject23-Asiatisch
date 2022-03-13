<?php
    require_once "include\databasetwo_connection.php";

    try{
        $sql = "SELECT * FROM movie";

        $stmt = $connection->prepare($sql);

        $success = $stmt->execute();

        if(!$success) {
            throw new Exception("failed to retrieve movie");
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
    <title>Peak Talent Management</title>
</head>
<body class="container flex flex-column">
    <header class="header"></header>

    <nav>
        <div class="nav">
            <a href="index.php" class="nav-item">Home</a>
            <a href="company_view_all.php" class="nav-item">Companies</a>
            <a href="movie_view_all.php" class="nav-item active">Movies</a>
            <a href="contact_us.php" class="nav-item">Contact</a>
            <a href="about_us.php" class="nav-item">About</a>
        </div>
    </nav>

    <main class="main">
        <form method="post">
            <h1 class="mt-1 mb-1">List of movies</h1>
                
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Director</th>
                        <th>Release date</th>
                        <th>Production company</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="radio" name="movie_id" id="1"></td>
                        <td>
                            <a href="movie_view.php">Recruit Of The Moon</a>
                        </td>
                        <td>Bridgette Fitzpatrick</td>
                        <td>2010-07-30</td>
                        <td>Warped Productions</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="movie_id" id="2"></td>
                        <td>
                            <a href="movie_view.php">Visiting The Shadows</a>
                        </td>
                        <td>Sam Crawford</td>
                        <td>2015-11-29</td>
                        <td>Hemlock Studios</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="movie_id" id="3"></td>
                        <td>
                            <a href="movie_view.php">Chasing Time</a>
                        </td>
                        <td>Ruthie Palmer</td>
                        <td>1964-05-06</td>
                        <td>Enclave Animations</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="movie_id" id="4"></td>
                        <td>
                            <a href="movie_view.php">Challenge Of The Elements</a>
                        </td>
                        <td>Salvador Flynn</td>
                        <td>1962-12-07</td>
                        <td>Warped Productions</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="movie_id" id="5"></td>
                        <td>
                            <a href="movie_view.php">Taste Of The Mountains</a>
                        </td>
                        <td>Ginger Hobbs</td>
                        <td>2018-06-04</td>
                        <td>Mutual Title Productions</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="movie_id" id="6"></td>
                        <td>
                            <a href="movie_view.php">Traces In The Sea</a>
                        </td>
                        <td>Rick Turner</td>
                        <td>1985-11-05</td>
                        <td>Interstellar Studios</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-1 buttons">
                <button class="button warning" type="submit" formaction="movie_update_form.php">Update</button> or
                <button class="button danger" type="submit" formaction="movie_delete_form.php">Delete</button> selected movie or
                <a class="button primary" href="movie_create_form.php">Create</a> new movie.
            </div>
        </form>
    </main>

    <footer class="footer">
        <p>&copy; 2022, all rights reserved.</p>
    </footer>
</body>
</html>