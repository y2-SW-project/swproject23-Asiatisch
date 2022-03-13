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
            <a href="company_view_all.php" class="nav-item active">Companies</a>
            <a href="movie_view_all.php" class="nav-item">Movies</a>
            <a href="contact_us.php" class="nav-item">Contact</a>
            <a href="about_us.php" class="nav-item">About</a>
        </div>
    </nav>

    <main class="main">
        <h1 class="mt-1 mb-1">List of movie production companies</h1>
            
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Website</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="company_view.php">Warped Productions</a>
                    </td>
                    <td>11 Donald Place, Midletown, Co. Cork</td>
                    <td>(021) 551861</td>
                    <td>https://www.warped-productions.com/</td>
                </tr>
                <tr>
                    <td>
                        <a href="company_view.php">Interstellar Studios</a>
                    </td>
                    <td>11 Adelaide Road, Glenageary, Co. Dublin</td>
                    <td>(01) 8796790</td>
                    <td>https://interstellar-studios.ie/</td>
                </tr>
                <tr>
                    <td>
                        <a href="company_view.php">Enclave Animations</a>
                    </td>
                    <td>9 Bridge Street, Tuam, Co. Galway</td>
                    <td>(051) 27409775</td>
                    <td>https://enclave-animations.ie/</td>
                </tr>
                <tr>
                    <td>
                        <a href="company_view.php">Hemlock Studios</a>
                    </td>
                    <td>20 The White House, Castlebar, Co. Mayo</td>
                    <td>(095) 625472</td>
                    <td>https://hemlock-studios.com/</td>
                </tr>
                <tr>
                    <td>
                        <a href="company_view.php">Bald Eagle Pictures</a>
                    </td>
                    <td>49 Main St, Cappamore, Co. Limerick</td>
                    <td>(051) 0365970</td>
                    <td>https://bald-eagle-pictures.ie/</td>
                </tr>
                <tr>
                    <td>
                        <a href="company_view.php">Mutual Title Productions</a>
                    </td>
                    <td>34 Moore Street, Athlone, Co Westmeath</td>
                    <td>(041) 915156</td>
                    <td>http://mutual-title-productions.com/</td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer class="footer">
        <p>&copy; 2022, all rights reserved.</p>
    </footer>
</body>
</html>