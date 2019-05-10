<!-- File created by Kyle Welch -->
<!-- This file is mostly HTML front-end work. You use a login form to sign in. Depending on what you inputted,-->
<!-- I had used a Bootstrap drag-and-click generator, as my CSS skills are very rusty plus it saved a lot of time. Here is a link,
and it will be provided in the final writeup https://mobirise.com/ -->
<?php
include_once('connect.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $uN = mysqli_real_escape_string($mysqli,$_POST['username']);
    $pW = mysqli_real_escape_string($mysqli,$_POST['password']);

    $sqlQuery = "SELECT * FROM users WHERE username = '$uN' and password = '$pW'";
    $sqlQueryA = "SELECT * FROM professor WHERE username = '$uN' and password = '$pW'";
    $result = mysqli_query($mysqli,$sqlQuery);
    $resultA = mysqli_query($mysqli, $sqlQueryA);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $rowA = mysqli_fetch_array($resultA,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    $countA = mysqli_num_rows($resultA);

    // If result matched $uN and pW table row must be 1 row

    if($count == 1) {
        $_SESSION['login_user'] = $uN;

        header("location: userIndex.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
    if($countA == 1) {
        $_SESSION['login_user'] = $uN;

        header("location: index.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }

}
?>

<html lang = "en">

<head>
    <title>Welchies University CS Dept Login</title>
    <link href = "css/bootstrap.min.css" rel = "stylesheet">

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
        }

        h2{
            text-align: center;
            color: #017572;
        }
    </style>

</head>

<body>

<h2>Welchies University CS Dept</h2>
<div class = "container form-signin">

    <?php
    $msg = '';

    if (isset($_POST['login']) && !empty($_POST['username'])
        && !empty($_POST['password'])) {

    }
    else {
        $msg = 'Wrong username or password';
    }
    ?>
</div> <!-- /container -->

<div class = "container">
    <form class = "form-signin" role = "form"
          action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
          ?>" method = "post">
        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
        <input type = "text" class = "form-control"
               name = "username"
               required autofocus></br>
        <input type = "password" class = "form-control"
               name = "password" required>
        <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                name = "login">Login</button>
    </form>
</div>
</body>
</html>
