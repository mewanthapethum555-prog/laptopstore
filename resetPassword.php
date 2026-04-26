<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="icon" href="resources/img/logo.jpg"/>

    <title>Laptop Store - Reset Password</title>
</head>

<body class="signIn_Body">

    <!--Reset Password Box-->
    <div class="signIn_Box" id="signInBox">
        <div>
            <h2 class="text-center">Reset Password</h2>

            <div class="d-none">
                <input type="hidden" id="vcode" value="<?php echo ($_GET["vcode"]) ?>"/>
            </div>

            <div class="mt-4 mb-4">
                <label for="form-label">Password: </label>
                <input type="password" class="form-control" id="np" />
            </div>
            <div class="mt-4 mb-4">
                <label form="form-label">Re-enter Password: </label>
                <input type="password" class="form-control" id="np2" />
            </div>
            <div class="d-none" id="msgDiv">
                <div class="alert alert-danger" id="msg"></div>
            </div>
            <div class="mt-4">
                <button class="btn btn-outline-dark btn-sm col-12" onclick="resetPassword();">Update</button>
            </div>
        </div>
    </div>
    <!--Reset Password Box-->
    <script src="script.js"></script>
</body>

</html>