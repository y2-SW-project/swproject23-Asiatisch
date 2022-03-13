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
        <h1 class="mt-1 mb-1">Talbot St Medical Centre</h1>
            
        <table class="table">
            <tbody>
                <tr>
                    <th>Address</th>
                    <td>Unit 27, Irish Life Mall 1, Talbot St, Dublin, D01 P620</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>(01) 872 7087</td>
                </tr>
                <tr>
                    <th>Website</th>
                    <td>
                        <a href="https://talbotstmedicalcentre.ie/" target="_blank">
                            https://talbotstmedicalcentre.ie/
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>Medical centre</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>
                        Aliquam dui metus, efficitur a molestie ac, finibus nec nisl. 
                        Donec sagittis a augue id gravida. Sed hendrerit tempus sapien. 
                        Phasellus nec mi in enim scelerisque cursus et quis diam. 
                        Mauris in gravida nulla. Nunc luctus risus eu nunc finibus 
                        bibendum. Proin porta posuere venenatis. Donec sed finibus 
                        purus, quis tempus nunc.
                    </td>
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
    </main>

    <footer class="footer">
        <p>&copy; 2022, all rights reserved.</p>
    </footer>
</body>
</html>