<?php

session_start();

if (isset($_SESSION["a"])) {
?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="icon" href="resources/img/logo.jpg" />
        <title>Laptop Store | Admin Dashboard</title>
    </head>

    <body class="adminBody" onload="loadUser();">
        <!-- nav bar -->
        <?php include "adminNavBar.php"; ?>
        <!-- nav bar -->

        <div class="col-10">
            <h2 class="text-center">User Management</h2>

            <div class="row d-flex justify-content-end mt-4">
                
                <div class="d-none" id="msgDiv">
                    <div class="alert alert-danger" id="msg" onclick="reload();"></div>
                </div>
                <div class="col-3 mb-2">
                    <input type="text" class="form-control" placeholder="User id" id="uid"/>
                </div>

                <button class=" btn btn-danger col-2" onclick="updateUserStatus();">Change Status</button>
                </div>

                <div class="mt-3">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">User ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody id="tb">
                            <!-- Table details -->

                            <!-- Table details -->
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- footer -->
            <div class="fixed-bottom col-12">
                <p class="text-center">&copy; 2024 Laptop Store.lk || All Right Reserved</p>
            </div>
            <!-- footer -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="script.js"></script>
    </body>

    </html>

<?php

} else {
    echo ("You are not a Valid Admin");
}


?>