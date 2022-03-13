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
            <a href="centre_view_all.php" class="nav-item active">Centres</a>
            <a href="patient_view_all.php" class="nav-item">Patients</a>
            <a href="contact_us.php" class="nav-item">Contact</a>
            <a href="about_us.php" class="nav-item">About</a>
        </div>
    </nav>

    <main class="main">
        <h1 class="mt-1 mb-1">List of medical centres</h1>
            
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="centre_view.php">Talbot St Medical Centre</a>
                    </td>
                    <td>Unit 27, Irish Life Mall 1, Talbot St, Dublin, D01 P620</td>
                    <td>(01) 872 7087</td>
                    <td>Medical centre</td>
                </tr>
                <tr>
                    <td>
                        <a href="centre_view.php">Highfield Alzheimer’s Care Centre</a>
                    </td>
                    <td>9 Swords Rd, Whitehall, Dublin, D09 H343</td>
                    <td>(01) 837 4444</td>
                    <td>Hospital</td>
                </tr>
                <tr>
                    <td>
                        <a href="centre_view.php">Swords Health Center</a>
                    </td>
                    <td>Bridge St, Townparks, Swords, Co. Dublin, K67 X765</td>
                    <td>(01) 921 2100</td>
                    <td>Community health centre</td>
                </tr>
                <tr>
                    <td>
                        <a href="centre_view.php">Greystones Medical Centre</a>
                    </td>
                    <td>Mill Rd, Killincarrig, Greystones, Co. Wicklow, A63 YE86</td>
                    <td>(01) 287 4275</td>
                    <td>Medical centre</td>
                </tr>
                <tr>
                    <td>
                        <a href="centre_view.php">Bray Medical Centre</a>
                    </td>
                    <td>Herbert Rd, Bray, Co. Wicklow, A98 K1K0</td>
                    <td>(01) 286 2035</td>
                    <td>General practitioner</td>
                </tr>
                <tr>
                    <td>
                        <a href="centre_view.php">Merrion Fertility Clinic</a>
                    </td>
                    <td>60 Lower Mount Street, Dublin 2, Dublin, D02 NH93</td>
                    <td>(01) 663 5000</td>
                    <td>Fertility clinic</td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer class="footer">
        <p>&copy; 2022, all rights reserved.</p>
    </footer>
</body>
</html>