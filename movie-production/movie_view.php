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
            <a href="movie_view_all.php" class="nav-item">Movies</a>
            <a href="contact_us.php" class="nav-item">Contact</a>
            <a href="about_us.php" class="nav-item">About</a>
        </div>
    </nav>

    <main class="main">
        <h1 class="mt-1 mb-1">Recruit Of The Moon</h1>
            
        <table class="table">
            <tbody>
                <tr>
                    <th>Director</th>
                    <td>Bridgette Fitzpatrick</td>
                    <td rowspan="7" class="centered">
                        <img src="images/default_movie.png" alt="Default movie image">
                    </td>
                </tr>
                <tr>
                    <th>Release date</th>
                    <td>2010-07-30</td>
                </tr>
                <tr>
                    <th>Production company</th>
                    <td>Warped Productions</td>
                </tr>
                <tr>
                    <th>Synopsis</th>
                    <td>
                        Integer et sapien vitae augue luctus tristique non neque tristique, egestas nisi sit amet, maximus 
                        lorem. Ut sit amet sapien a elit bibendum viverra ac non purus. 
                    </td>
                </tr>
                <tr>
                    <th>Genres</th>
                    <td>Action, Romance</td>
                </tr>
                <tr>
                    <th>Rating</th>
                    <td>
                        <img class="inline h-1" src="images/star_full.png" alt="Star rating">
                        <img class="inline h-1" src="images/star_full.png" alt="Star rating">
                        <img class="inline h-1" src="images/star_full.png" alt="Star rating">
                        <img class="inline h-1" src="images/star_full.png" alt="Star rating">
                        <img class="inline h-1" src="images/star_empty.png" alt="No star rating">
                    </td>
                </tr>
            </tbody>
        </table>

        <form method="post">
            <div class="mt-1 buttons">
                <button type="submit" class="button warning" formaction="movie_update_form.php">Update</button>
                <button type="submit" class="button danger" formaction="movie_delete_form.php">Delete</button>
            </div>
        </form>
    </main>

    <footer class="footer">
        <p>&copy; 2022, all rights reserved.</p>
    </footer>
</body>
</html>