function changeView() {

    var signInBox = document.getElementById("signInBox");
    var signUpBox = document.getElementById("signUpBox");

    signInBox.classList.toggle("d-none");
    signUpBox.classList.toggle("d-none");

}

function signUp() {

    var fname = document.getElementById("fn");
    var lname = document.getElementById("ln");
    var email = document.getElementById("email");
    var mobile = document.getElementById("mobile");
    var username = document.getElementById("username");
    var password = document.getElementById("password");

    //alert(fname.value);

    var t = new FormData();
    t.append("f", fname.value);
    t.append("l", lname.value);
    t.append("e", email.value);
    t.append("m", mobile.value);
    t.append("u", username.value);
    t.append("p", password.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            if (response == "Success") {
                document.getElementById("msg1").innerHTML = "Registration Successfully";
                document.getElementById("msg1").className = "alert alert-success";
                document.getElementById("msgDiv1").className = "d-block";

                fname.value = "";
                lname.value = "";
                email.value = "";
                mobile.value = "";
                username.value = "";
                password.value = "";

            } else {
                document.getElementById("msg1").innerHTML = response;
                document.getElementById("msgDiv1").className = "d-block";
            }
        }
    };

    request.open("POST", "signUpProcess.php", true);
    request.send(t);

}



function signIn() {
    var un = document.getElementById("un");
    var pw = document.getElementById("pw");
    var rm = document.getElementById("rm");

    //alert(un.value);

    var f = new FormData();
    f.append("u", un.value);
    f.append("p", pw.value);
    f.append("r", rm.checked);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            if (response == "Success") {
                window.location = "index.php";
            } else {
                document.getElementById("msg2").innerHTML = response;
                document.getElementById("msgDiv2").className = "d-block";
            }
        }
    };

    request.open("POST", "signInProcess.php", true);
    request.send(f);

}


function adminSignIn() {
    var un = document.getElementById("un");
    var pw = document.getElementById("pw");

    var f = new FormData();
    f.append("u", un.value);
    f.append("p", pw.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            //alert(response);

            if (response == "Success") {
                window.location = "adminDashboard.php";
            } else {
                document.getElementById("msg").innerHTML = response;
                document.getElementById("msgDiv").className = "d-block";
            }
        }
    };

    request.open("POST", "adminSignInProcess.php", true);
    request.send(f); // Ensure the FormData object is sent
}

function loadUser() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            document.getElementById("tb").innerHTML = response;
        }
    };

    request.open("POST", "loadUserProcess.php", true);
    request.send();
}

function updateUserStatus() {
    var userid = document.getElementById("uid");

    var f = new FormData();
    f.append("u", userid.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            //alert(response);
            if (response == "Deactive") {
                document.getElementById("msg").innerHTML = "User Deactivated Successfully";
                document.getElementById("msg").className = "alert alert-danger";
                document.getElementById("msgDiv").className = "d-block";
                userid.value = "";
                loadUser();

            } else if (response == "Active") {
                document.getElementById("msg").innerHTML = "User Activated Successfully";
                document.getElementById("msg").className = "alert alert-success";
                document.getElementById("msgDiv").className = "d-block";
                userid.value = "";
                loadUser();

            } else {
                document.getElementById("msg").innerHTML = response;
                //document.getElementById("msg").className = "alert alert-light";
                document.getElementById("msgDiv").className = "d-block";
                //Other Response
            }
        }
    };

    request.open("POST", "updateUserStatusProcess.php", true);
    request.send(f);

}

function reload() {
    //alert("OK");
    location.reload();
}


function brandRegister() {
    var brand = document.getElementById("brandName").value; // Get value from input field

    var f = new FormData();
    f.append("b", brand);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
            var response = request.responseText;

            if (response === "Success") {
                document.getElementById("msg1").innerHTML = "Brand Registered Successfully";
                document.getElementById("msg1").className = "alert alert-success";
                document.getElementById("msgDiv1").className = "d-block";
                document.getElementById("brandName").value = ""; // Clear input field

            } else {
                document.getElementById("msg1").innerHTML = response;
                document.getElementById("msg1").className = "alert alert-danger";
                document.getElementById("msgDiv1").className = "d-block";
            }
        }
    };

    request.open("POST", "brandRegisterProcess.php", true);
    request.send(f);
}

function catRegister() {
    var cat = document.getElementById("catName");
    //alert(cat.value);

    var f = new FormData();
    f.append("c", cat.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;

            if (response === "Success") {
                document.getElementById("msg2").innerHTML = "Category Registered Successfully";
                document.getElementById("msg2").className = "alert alert-success";
                document.getElementById("msgDiv2").className = "d-block";
                document.getElementById("catName").value = ""; // Clear input field

            } else {
                document.getElementById("msg2").innerHTML = response;
                document.getElementById("msg2").className = "alert alert-danger";
                document.getElementById("msgDiv2").className = "d-block";
            }

        }
    }

    request.open("POST", "categoryRegisterProcess.php", true);
    request.send(f);
}

function colorRegister() {
    var col = document.getElementById("colName");


    var f = new FormData();
    f.append("col", col.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;

            if (response === "Success") {
                document.getElementById("msg3").innerHTML = "Color Registered Successfully";
                document.getElementById("msg3").className = "alert alert-success";
                document.getElementById("msgDiv3").className = "d-block";
                document.getElementById("colName").value = ""; // Clear input field

            } else {
                document.getElementById("msg3").innerHTML = response;
                document.getElementById("msg3").className = "alert alert-danger";
                document.getElementById("msgDiv3").className = "d-block";
            }

        }
    }

    request.open("POST", "colorRegisterProcess.php", true);
    request.send(f);
}

function processorRegister() {
    var size = document.getElementById("sizeName");


    var f = new FormData();
    f.append("s", size.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;

            if (response === "Success") {
                document.getElementById("msg4").innerHTML = "Processor Registered Successfully";
                document.getElementById("msg4").className = "alert alert-success";
                document.getElementById("msgDiv4").className = "d-block";
                document.getElementById("sizeName").value = ""; // Clear input field

            } else {
                document.getElementById("msg4").innerHTML = response;
                document.getElementById("msg4").className = "alert alert-danger";
                document.getElementById("msgDiv4").className = "d-block";
            }

        }
    }

    request.open("POST", "processorRegisterProcess.php", true);
    request.send(f);
}

function regProduct() {

    var pname = document.getElementById("pname");
    var brand = document.getElementById("brand");
    var cat = document.getElementById("cat");
    var color = document.getElementById("color");
    var size = document.getElementById("size");
    var desc = document.getElementById("desc");
    var file = document.getElementById("file");

    var form = new FormData();
    form.append("pname", pname.value);
    form.append("brand", brand.value);
    form.append("cat", cat.value);
    form.append("color", color.value);
    form.append("size", size.value);
    form.append("desc", desc.value);
    form.append("image", file.files[0]);

    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (req.readyState == 4 & req.status == 200) {
            var response = req.responseText;
            alert(response);

        }
    };
    req.open("POST", "productRegProcess.php", true);
    req.send(form);

}

function updateStock() {

    var pname = document.getElementById("selectProduct");
    var qty = document.getElementById("qty");
    var price = document.getElementById("uprice");

    // alert(pname.value);

    var f = new FormData();
    f.append("p", pname.value);
    f.append("q", qty.value);
    f.append("up", price.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            alert(response);
            location.reload();
        }
    };

    request.open("POST", "updateStockProcess.php", true);
    request.send(f);



}

function printDiv() {
    var orginalContent = document.body.innerHTML;
    var printArea = document.getElementById("printArea").innerHTML;

    document.body.innerHTML = printArea;

    window.print();

    document.body.innerHTML = orginalContent;
}

function loadProduct(x) {

    var page = x;
    // alert(x);

    var f = new FormData();
    f.append("p", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };

    request.open("POST", "loadProductProcess.php", true);
    request.send(f);
}

function searchProduct(x) {

    var page = x;
    var product = document.getElementById("product");

    //alert(page);
    // alert(product.value)

    var f = new FormData();
    f.append("p", product.value);
    f.append("pg", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };

    request.open("POST", "searchProductProcess.php", true);
    request.send(f);

}

function viewFilter() {
    document.getElementById("filterId").className = "d-block";
}

function advSearchProduct(x) {
    //alert("ok");

    var page = x;
    var color = document.getElementById("color");
    var cat = document.getElementById("cat");
    var brand = document.getElementById("brand");
    var size = document.getElementById("size");
    var min = document.getElementById("min");
    var max = document.getElementById("max");

    //alert(cat.value);

    var f = new FormData();
    f.append("pg", page);
    f.append("co", color.value);
    f.append("cat", cat.value);
    f.append("b", brand.value);
    f.append("s", size.value);
    f.append("min", min.value);
    f.append("max", max.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var responce = request.responseText;
            // alert(responce);
            document.getElementById("pid").innerHTML = responce;
        }
    };

    request.open("POST", "advSearchProductProcess.php", true);
    request.send(f);
}

function uploadImg() {
    var img = document.getElementById("imageUploader");

    var f = new FormData();
    f.append("i", img.files[0]);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var responce = request.responseText;
            // alert(responce);

            if (responce == "empty") {
                alert("Please select your profile image.");
            } else {
                document.getElementById("i").src = responce;
                img.value = "";
            }
        }
    };

    request.open("POST", "profileImgUpload.php", true);
    request.send(f);
}

function updateData() {
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var mobile = document.getElementById("mobile");
    var password = document.getElementById("password");
    var no = document.getElementById("no");
    var line1 = document.getElementById("line1");
    var line2 = document.getElementById("line2");

    // alert(fname.value);

    var f = new FormData();
    f.append("f", fname.value);
    f.append("l", lname.value);
    f.append("e", email.value);
    f.append("m", mobile.value);
    f.append("p", pw.value);
    f.append("no", no.value);
    f.append("l1", line1.value);
    f.append("l2", line2.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var responce = request.responseText;
            alert(responce);
            reload();
        }
    };

    request.open("POST", "updateDataProcess.php", true);
    request.send(f);
}

function signOut() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var responce = request.responseText;
            alert(responce);
            reload();
        }
    };

    request.open("POST", "signOutProcess.php", true);
    request.send();
}

function addtoCart(x) {
    var stockId = x;
    var qty = document.getElementById("qty");

    if (qty.value > 0) {
        var f = new FormData();
        f.append("s", stockId);
        f.append("q", qty.value);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                var responce = request.responseText;
                // alert(responce);
                swal("Good job!", responce, "success");
                qty.value = "";
            }
        };

        request.open("POST", "addtoCartProcess.php", true);
        request.send(f);
    } else {
        alert("Please enter valid quantity.");
    }
}

function loadCart() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var responce = request.responseText;
            // alert(responce);
            document.getElementById("cartBody").innerHTML = responce;
        }
    };

    request.open("POST", "loadCartprocess.php", true);
    request.send();
}

function incrementCartQty(x) {
    var cartId = x;
    var qty = document.getElementById("qty" + x);
    var newQty = parseInt(qty.value) + 1;
    // alert(newQty);

    var f = new FormData();
    f.append("c", cartId);
    f.append("q", newQty);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var responce = request.responseText;
            // alert(responce);
            if (responce == "Success") {
                qty.value = parseInt(qty.value) + 1;
                loadCart();
            } else {
                alert(responce);
            }
        }
    };

    request.open("POST", "updateCartQtyProcess.php", true);
    request.send(f);
}

function decrementQty(x) {
    var cartId = x;
    var qty = document.getElementById("qty" + x);
    var newQty = parseInt(qty.value) - 1;
    // alert(newQty);

    var f = new FormData();
    f.append("c", cartId);
    f.append("q", newQty);

    if (newQty > 0) {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                var responce = request.responseText;
                // alert(responce);
                if (responce == "Success") {
                    qty.value = parseInt(qty.value) - 1;
                    loadCart();
                } else {
                    alert(responce);
                }
            }
        };

        request.open("POST", "updateCartQtyProcess.php", true);
        request.send(f);
    }
}

function removeCart(x) {
    if (confirm("Are you sure deleting this item")) {

        var f = new FormData();
        f.append("c", x);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                var responce = request.responseText;
                alert(responce);
                reload();
            }
        }

        request.open("POST", "removeCartProcess.php", true);
        request.send(f);

    }
}

function checkOut() {
    // alert("ok");

    var f = new FormData();
    f.append("cart", true);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var responce = request.responseText;
            // alert(responce);
            var payment = JSON.parse(responce);
            doCheckout(payment, "checkoutProcess.php");
        }
    }

    request.open("POST", "paymentProcess.php", true);
    request.send(f);
}

function doCheckout(payment, path) {

    // Payment completed. It can be a successful failure.
    payhere.onCompleted = function onCompleted(orderId) {
        console.log("Payment completed. OrderID:" + orderId);
        // Note: validate the payment and show success or failure page to the customer

        var f = new FormData();
        f.append("payment", JSON.stringify(payment));

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                var response = request.responseText;
                // alert(responce);
                var order = JSON.parse(response);

                if (order.resp == "Success") {
                  //  reload();
                  window.location = "invoice.php?orderId=" + order.order_id;
                } else {
                    alert(response);
                }
            }
        } 

        request.open("POST", path, true);
        request.send(f);
    };

    // Payment window closed
    payhere.onDismissed = function onDismissed() {
        // Note: Prompt user to pay again or show an error page
        console.log("Payment dismissed");
    };

    // Error occurred
    payhere.onError = function onError(error) {
        // Note: show an error page
        console.log("Error:" + error);
    };

    // Show the payhere.js popup, when "PayHere Pay" is clicked
    // document.getElementById('payhere-payment').onclick = function (e) {
    payhere.startPayment(payment);
    // };
}

function buyNow(stockId) {
    // alert(stockId);
    var qty = document.getElementById("qty");

    if (qty.value > 0) {

        var f = new FormData();
        f.append("cart", false);
        f.append("stockId", stockId);
        f.append("qty", qty.value);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                var responce = request.responseText;
                // alert(responce);
                var payment = JSON.parse(responce);
                payment.stock_id = stockId;
                payment.qty = qty.value;
                doCheckout(payment, "buynowProcess.php");
            }
        }

        request.open("POST", "paymentProcess.php", true);
        request.send(f);

    } else {
        alert("Please enter valid quantity");
    }
}

function forgetPassword() {
    // alert("ok");

    var email = document.getElementById("e");

    if (email.value != "") {

        var f = new FormData();
        f.append("e", email.value);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 & request.status == 200) {
                var response = request.responseText;
                // alert(response);
                if (response == "Success") {
                    document.getElementById("msg").innerHTML = "Email Sent! Please check your mail box";
                    document.getElementById("msg").className = "alert alert-success";
                    document.getElementById("msgDiv").className = "d-block";
                    email.value = "";
                } else {
                    document.getElementById("msg").innerHTML = response;
                    document.getElementById("msg").className = "alert alert-danger";
                    document.getElementById("msgDiv").className = "d-block";
                }
            }
        };

        request.open("POST", "forgetPasswordProcess.php", true);
        request.send(f);

    } else {
        alert("Please enter your valid Email");
    }
}

function resetPassword() {
    var vcode = document.getElementById("vcode");
    var np = document.getElementById("np");
    var np2 = document.getElementById("np2");

    var f = new FormData();
    f.append("vcode", vcode.value);
    f.append("np", np.value);
    f.append("np2", np2.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                window.location = "signIn.php";
            } else {
                document.getElementById("msg").innerHTML = response;
                document.getElementById("msg").className = "alert alert-danger";
                document.getElementById("msgDiv").className = "d-block";
            }

        }
    };

    request.open("POST", "resetPasswordProcess.php", true);
    request.send(f);

}

function loadChart(){
    var ctx = document.getElementById('myChart');

    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            // alert(response);
            var data = JSON.parse(response);

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                  labels: data.labels,
                  datasets: [{
                    label: '# of Votes',
                    data: data.data,
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });

        }
    };

    request.open("POST", "loadChartProcess.php", true);
    request.send();
}
