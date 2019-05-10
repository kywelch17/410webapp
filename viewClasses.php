<?php
require_once('connect.php');
session_start();

$resultQuery = mysqli_query($mysqli, "SELECT class.id, class, description, professor.name AS prof_id 
    FROM class 
    JOIN professor ON professor.id=class.prof_id");
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <title>WUCS - Classes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
<section class="menu cid-rpZCvGTzeF" once="menu" id="menu2-2">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
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
    table
    {
        width: 100%;
        background-color: #017572;
    }
    th, td
    {
        text-align: center;
        padding: 10px;
    }
    th
    {
        color: black;
    }
    tr
    {
        color: black;
    }
    button
    {
        background-color: #017572;
        border: 1px solid black;
        text-align: center;
        font-size: 12pt;
        margin-right: auto;
        margin-left: auto;
    }
    button:hover
    {
        background-color: #017572;
        color: #ADABAB;
    }
    a
    {
        color: black;
    }
    a:hover
    {
        color: #ADABAB;
    }
</style>
<section class="engine"></a></section><section class="tabs3 cid-rpZOWSJbS0" id="tabs3-6">
    <table>
        <tr>
            <th>Class</th> <th>Description</th> <th>Professor</th> <th>Update</th></u>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($resultQuery))
        {
            echo "<tr>";
            echo "<td>".$user_data['class']."</td>";
            echo "<td>".$user_data['description']."</td>";
            echo "<td>".$user_data['prof_id']."</td>";
            echo "<td><button><a href='editClasses.php?id=$user_data[id]'>Edit</a></button><button><a href='deleteClasses.php?id=$user_data[id]'>Delete</a></button></td></tr>";
        }
        ?>
    </table>
</body>
</html>
