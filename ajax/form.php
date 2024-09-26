<?php
// form.php

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Form</title>
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 bg-light">
                <form id="myForm" method="post">
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone">Phone</label>
                        <input class="form-control" type="tel" name="phone" id="phone">
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-primary w-100" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"
        integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    $(document).ready(function() {
        $('#myForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form s

            $.ajax({
                type: 'POST',
                url: 'http://localhost/php-couses/ajax/server.php',
                data: $(this).serialize(), // Serialize the form data
                dataType: 'json',
                success: function(response) {
                    console.log("Response from server:", response);
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            text: response.message
                        });
                        $('#myForm')[0].reset(); // Clear the form
                    } else {
                        Swal.fire({
                            icon: 'error',
                            text: response.message
                        });
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX request failed:", textStatus, errorThrown);
                    Swal.fire({
                        icon: 'error',
                        text: 'An error occurred. Please try again later.'
                    });
                }
            });
        });
    });
    </script>

    
</body>

</html>

