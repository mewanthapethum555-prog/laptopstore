<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/img/logo.jpg" />
    <title>Nav Bar</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <!-- navbar-dark -->
            <div class="container">
                <a class="navbar-brand h1 mb-0" href="adminDashboard.php">
                    <img class="me-3"src="resources/img/logo.jpg" height="26"/>
                    Admin Dashboard</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">

                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="adminUser.php">User Management</a>
                        </li>

                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="adminProduct.php">Product Management</a>
                        </li>

                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="adminStock.php">Stock Management</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="adminReport.php">Report Management</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
</body>
</html>