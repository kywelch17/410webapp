<!-- File created by Kyle Welch -->
<!-- This is used to edit information on a student. This setup looks familiar to editClass.php and edit faculty.php-->
<!-- I had used a Bootstrap drag-and-click generator, as my CSS skills are very rusty plus it saved a lot of time. Here is a link,
and it will be provided in the final writeup https://mobirise.com/ --><html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <title>WUCS - Edit Classes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
<section class="menu cid-rpZCvGTzeF" id="menu2-2">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <!-- Top Bar -->
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="http://localhost/410webapp/index.php">WU Computer Science<br></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="http://localhost/410webapp/students.php">
                        Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="http://localhost/410webapp/faculty.php">Faculty</a>
                </li>
                <li class="navitem">
                    <a class ="nav-link link text-black display-4" href="http://localhost/410webapp/classes.php">Classes</a>
                </li></ul>
        </div>
    </nav>
</section>
<!-- The structure of the tables -->
<style>
    body {
        text-align: center;
    }
    form {
        display: inline-block;
    }
    input{
        background-color: #ADABAB;
        color: #017572;
    }
</style>
<section class="engine"></a></section><section class="tabs3 cid-rpZOWSJbS0" id="tabs3-6">
    <?php
    // including the database connection file
    include_once("connect.php");

    //if there is an update, post what has been collected
    if(isset($_POST['update'])) {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $major = $_POST['major'];
        $status = $_POST['status'];
        $uN = $_POST['username'];
        $pW = $_POST['password'];

        $result = mysqli_query($mysqli, "UPDATE users SET name = '$name', major = '$major', status = '$status', username = '$uN', password = '$pW', 
                 WHERE id=$id");

        header("Location: index.php");
        }

        //getting id from url
        $id = $_GET['id'];

        //selecting data associated with this particular id
        $result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
        //updating the table

        //collecting what has been selected
        while ($res = mysqli_fetch_array($result)) {
            $name = $res['name'];
            $major = $res['major'];
            $status = $res['status'];
            $uN = $res['username'];
            $pW = $res['password'];
    }
    ?>
    <!-- This creates the form (very similar to the form for adding) and shows the information that matches the id -->
    <form name="form1" method="post" action="editStudents.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td>Major</td>
                <td><input type="text" name="major" value="<?php echo $major;?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" value="<?php echo $status;?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $uN;?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $pW;?>"</td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>