<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="icon" href="resources/img/logo.jpg" />
    <title>Laptop Store</title>
</head>

<body class="AdminSignInBody">

    <div class="adminSignIn_Box">

        <h2 class="text-center text-info">Admin Login</h2>

        <div class="mt-2">
            <label for="form-label" class="mb-2">Username :</label>
            <input type="text" class="form-control border-black bg-transparent" placeholder="Ex: The Name" id="un" />
        </div>

        <div class="mt-2 mb-2">
            <label for="form-label" class="mb-2">Password :</label>
            <input type="password" class="form-control border-black bg-transparent" placeholder="Ex: *******" id="pw" />
        </div>

        <div class="d-none" id="msgDiv">
            <div class="alert alert-danger" id="msg"></div>
        </div>

        <div class="mt-4">
            <button class="btn btn-secondary col-12" onclick="adminSignIn();">Sign In</button>
        </div>

    </div>



    <script src="script.js"></script>
</body>

</html>