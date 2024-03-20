<?php
include "Connection.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Bootstrap/bootstap.min.css">
    <script src="Bootstrap/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/bootstrap.min.js" ></script>
    <script src="Bootstrap/popper.min.js"></script>
    <title>Registration Form</title>
</head>
<body>
<div class="container">
    <div class="registration-form">
        <div class="content my-3">
            <h1>Registration Form</h1>
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Student ID">
        </div>
       <div class="row">
            <div class="input-group col">
                <input type="text" class="form-control" placeholder="First Name"  autocomplete="off">
            </div>
            <div class="input-group col">
                <input type="text" class="form-control" placeholder="Last Name" autocomplete="off">
            </div>
       </div>
    </div>

</div>
       
    </div>
</body>
</html>