<?php

session_start();

if (isset($_SESSION["a"])) {

?>


    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin || Product Management</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="icon" href="resources/img/logo.jpg" />
    </head>

    <body class="adminBody">
        <?php
        include "adminNavbar.php";
        ?>

        <div class="col-10">
            <h2 class="text-center">Product Management</h2>

            <div class="row">

                <!-- Brand Registration -->
                <div class="col-4 offset-1 mt-4">
                    <label for="brandName" class="form-label">Brand Name : </label>
                    <div>
                        <input type="text" id="brandName" placeholder="Brand Name" class="form-control mb-4" />
                    </div>

                    <div class="d-none" id="msgDiv1" onclick="reload();">
                        <div class="alert alert-danger d-none" id="msg1"></div>
                    </div>

                    <div>
                        <button class="btn btn-warning col-12" onclick="brandRegister();">Brand Register</button>
                    </div>
                </div>

                <!-- Brand Registration -->


                <!-- Category Registration -->
                <div class="col-4 offset-2 mt-4">
                    <label for="form-label">Category : </label>
                    <div><input type="text" placeholder="Enter Category" class="form-control mb-3" id="catName" /></div>

                    <div class="d-none" id="msgDiv2" onclick="reload();">
                        <div class="alert alert-danger" id="msg2"></div>
                    </div>

                    <div>
                        <button class="btn btn-warning col-12" onclick="catRegister();">Category Register</button>
                    </div>

                </div>
                <!-- Category Registration -->

                <!-- Color Registration -->
                <div class="col-4 offset-1 mt-5">
                    <label for="form-label">Color Code : </label>
                    <div><input type="text" placeholder="Color Code" class="form-control mb-3" id="colName" /></div>

                    <div class="d-none" id="msgDiv3" onclick="reload();">
                        <div class="alert alert-danger col-12" id="msg3"></div>
                    </div>

                    <div>
                        <button class="btn btn-warning col-12" onclick="colorRegister();">Color Register</button>
                    </div>

                </div>
                <!-- Color Registration -->


                <!-- Processor Registration -->
                <div class="col-4 offset-2 mt-5">
                    <label for="form-label">Processor : </label>
                    <div><input type="text" placeholder="Intel/AMD" class="form-control mb-3" id="sizeName" /></div>

                    <div class="d-none" id="msgDiv4" onclick="reload();" >
                        <div class="alert alert-danger col-12" id="msg4"></div>
                    </div>

                    <div>
                        <button class="btn btn-warning col-12" onclick="processorRegister();">Processor Register</button>
                    </div>

                </div>
                <!-- Processor Registration -->

            </div>

        </div>

        <!-- footer -->
        <div class="fixed-bottom col-12 bg-success">
            <p class="text-center">&copy; 2024 Laptop Store.lk || All Rights Reserved</p>
        </div>
        <!-- footer -->

        <script src="script.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="bootstrap.bundle.min.js"></script>
    </body>

    </html>


<?php

} else {
    echo ("You are not a valid Admin");
}

?>