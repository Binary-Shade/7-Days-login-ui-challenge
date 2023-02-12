
<?php
    include "connect.php";
        if(isset($_POST['submit'])){
            var_dump($_POST['submit']);      
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];

$query = "SELECT * FROM `login_details` WHERE email='$email' AND pwd='$pwd'";
$result = mysqli_query($connection, $query);


if (mysqli_num_rows($result) > 0) {
  // Successful login, start a session and redirect the user
  session_start();
  var_dump($_SESSION);
  $_SESSION['logged_in'] = true;
  header('Location: dashboard.php');
  exit;
} else {
  // Show an error message for an unsuccessful login
}

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
    <div class="login">
        <h2>Login</h2>
        <form class="needs-validation" action="#" method="post">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email :</label>
                <input class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    please enter valid email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="pwd">Password :</label>
                <input class="form-control" type="password" id="pwd" required>
                <div class="invalid-feedback">
                    please enter correct password
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Login">
        </form>
    </div>
</body>
</html>