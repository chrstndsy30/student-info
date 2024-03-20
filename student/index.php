<?php include("header.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>CRUD with Email Validation</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Bootstrap/bootstap.min.css">
    <script src="Bootstrap/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/bootstrap.min.js" ></script>
    <script src="Bootstrap/popper.min.js"></script>
</head>

<body>
    <div class="login-form">
        <div class="content">
            <h1 class="mb-3">Register</h1>
            <form action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Login</button>
                    <button class="btn btn-success">SignUp</button>
                        <p class="mt-2"><a href="#">Fogot Password?</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php include("footer.php"); ?>