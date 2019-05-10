<html lang = "en">
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

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $class = $_POST['class'];
        $description = $_POST['description'];
        $prof_id = $_POST['prof_id'];

        //updating the table
        $result = mysqli_query($mysqli, "UPDATE class SET class='$class',description='$description',prof_id='$prof_id', WHERE id=$id");
    }
    //getting id from url
    $id = $_GET['id'];

    //selecting data associated with this particular id
    $result = mysqli_query($mysqli, "SELECT * FROM class WHERE id=$id");

    while($res = mysqli_fetch_array($result))
    {
        $class = $res['class'];
        $description = $res['description'];
        $prof_id = $res['prof_id'];
    }
    ?>
    <!-- This creates the form (very similar to the form for adding) and shows the information that matches the id -->
    <form name="form1" method="post" action="editClasses.php">
        <table border="0">
            <tr>
                <td>Class</td>
                <td><input type="text" name="name" value="<?php echo $class;?>"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="office" value="<?php echo $description;?>"></td>
            </tr>
            <tr>
                <td>Prof ID</td>
                <td><input type="text" name="email" value="<?php echo $prof_id;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    </body>
    </html>